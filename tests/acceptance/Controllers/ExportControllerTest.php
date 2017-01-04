<?php
/**
 * ExportControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */
use Carbon\Carbon;
use FireflyIII\Export\Processor;
use FireflyIII\Export\ProcessorInterface;
use FireflyIII\Models\ExportJob;
use FireflyIII\Repositories\Account\AccountRepositoryInterface;
use FireflyIII\Repositories\ExportJob\ExportJobRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-12-10 at 05:51:41.
 */
class ExportControllerTest extends TestCase
{


    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @covers \FireflyIII\Http\Controllers\ExportController::download
     */
    public function testDownload()
    {
        $repository = $this->mock(ExportJobRepositoryInterface::class);
        $repository->shouldReceive('exists')->once()->andReturn(true);
        $repository->shouldReceive('getContent')->once()->andReturn('Some content beep boop');

        $this->be($this->user());
        $this->call('GET', route('export.download', ['testExport']));
        $this->assertResponseStatus(200);
    }

    /**
     * @covers \FireflyIII\Http\Controllers\ExportController::getStatus
     */
    public function testGetStatus()
    {
        $this->be($this->user());
        $this->call('GET', route('export.status', ['testExport']));
        $this->assertResponseStatus(200);
    }

    /**
     * @covers \FireflyIII\Http\Controllers\ExportController::index
     */
    public function testIndex()
    {
        $this->be($this->user());
        $this->call('GET', route('export.index'));
        $this->assertResponseStatus(200);

        // has bread crumb
        $this->see('<ol class="breadcrumb">');
    }

    /**
     * @covers \FireflyIII\Http\Controllers\ExportController::postIndex
     */
    public function testPostIndex()
    {
        $this->session(
            ['first' => new Carbon('2014-01-01')]
        );


        $data      = [

            'export_start_range' => '2015-01-01',
            'export_end_range'   => '2015-01-21',
            'exportFormat'       => 'csv',
            'accounts'           => [1],
            'job'                => 'testExport',
        ];

        $accountRepository = $this->mock(AccountRepositoryInterface::class);
        $accountRepository->shouldReceive('getAccountsById')->withArgs([$data['accounts']])->andReturn(new Collection);

        $processor = $this->mock(ProcessorInterface::class);
        $processor->shouldReceive('collectJournals')->once();
        $processor->shouldReceive('convertJournals')->once();
        $processor->shouldReceive('exportJournals')->once();
        $processor->shouldReceive('createZipFile')->once();

        $repository = $this->mock(ExportJobRepositoryInterface::class);
        $repository->shouldReceive('changeStatus')->andReturn(true);
        $repository->shouldReceive('findByKey')->andReturn(new ExportJob);

        $this->be($this->user());

        $this->call('post', route('export.export'), $data);
        $this->assertResponseStatus(200);
        $this->see('ok');
    }

}

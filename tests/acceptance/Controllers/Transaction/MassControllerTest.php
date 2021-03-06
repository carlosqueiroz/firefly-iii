<?php
/**
 * MassControllerTest.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

namespace Transaction;

use FireflyIII\Models\TransactionJournal;
use TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-12-10 at 05:51:44.
 */
class MassControllerTest extends TestCase
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
     * @covers \FireflyIII\Http\Controllers\Transaction\MassController::delete
     */
    public function testDelete()
    {
        $withdrawals = TransactionJournal::where('transaction_type_id', 1)->where('user_id', $this->user()->id)->take(2)->get()->pluck('id')->toArray();
        $this->be($this->user());
        $this->call('get', route('transactions.mass.delete', $withdrawals));
        $this->assertResponseStatus(200);
        $this->see('Delete a number of transactions');
        // has bread crumb
        $this->see('<ol class="breadcrumb">');
    }

    /**
     * @covers \FireflyIII\Http\Controllers\Transaction\MassController::destroy
     */
    public function testDestroy()
    {
        $this->session(['transactions.mass-delete.url' => 'http://localhost']);
        $deposits = TransactionJournal::where('transaction_type_id', 2)->where('user_id', $this->user()->id)->take(2)->get()->pluck('id')->toArray();
        $data     = [
            'confirm_mass_delete' => $deposits,
        ];
        $this->be($this->user());
        $this->call('post', route('transactions.mass.destroy'), $data);
        $this->assertSessionHas('success');
        $this->assertResponseStatus(302);

        // visit them should give 404.
        $this->call('get', route('transactions.show', [$deposits[0]]));
        $this->assertResponseStatus(404);


    }

    /**
     * @covers \FireflyIII\Http\Controllers\Transaction\MassController::edit
     */
    public function testEdit()
    {
        $transfers = TransactionJournal::where('transaction_type_id', 3)->where('user_id', $this->user()->id)->take(2)->get()->pluck('id')->toArray();
        $this->be($this->user());
        $this->call('get', route('transactions.mass.delete', $transfers));
        $this->assertResponseStatus(200);
        $this->see('Edit a number of transactions');
        // has bread crumb
        $this->see('<ol class="breadcrumb">');
    }

    /**
     * @covers \FireflyIII\Http\Controllers\Transaction\MassController::update
     */
    public function testUpdate()
    {
        $deposit = TransactionJournal::where('transaction_type_id', 2)->where('user_id', $this->user()->id)
                                     ->whereNull('deleted_at')
                                     ->first();
        $this->session(['transactions.mass-edit.url' => 'http://localhost']);

        $data = [
            'journals'                                  => [$deposit->id],
            'description'                               => [$deposit->id => 'Updated salary thing'],
            'amount'                                    => [$deposit->id => 1600],
            'amount_currency_id_amount_' . $deposit->id => 1,
            'date'                                      => [$deposit->id => '2014-07-24'],
            'source_account_name'                       => [$deposit->id => 'Job'],
            'destination_account_id'                    => [$deposit->id => 1],
            'category'                                  => [$deposit->id => 'Salary'],
        ];

        $this->be($this->user());
        $this->call('post', route('transactions.mass.update', [$deposit->id]), $data);
        $this->assertSessionHas('success');
        $this->assertResponseStatus(302);

        // visit them should show updated content
        $this->call('get', route('transactions.show', [$deposit->id]));
        $this->assertResponseStatus(200);
        $this->see('Updated salary thing');
    }

}

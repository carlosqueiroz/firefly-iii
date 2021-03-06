<?php
/**
 * form.php
 * Copyright (C) 2016 thegrumpydictator@gmail.com
 *
 * This software may be modified and distributed under the terms of the
 * Creative Commons Attribution-ShareAlike 4.0 International License.
 *
 * See the LICENSE file for details.
 */

return [

    // new user:
    'bank_name'                      => 'Banknaam',
    'bank_balance'                   => 'Saldo',
    'savings_balance'                => 'Saldo van spaarrekening',
    'credit_card_limit'              => 'Credit card limiet',
    'automatch'                      => 'Automatisch herkennen',
    'skip'                           => 'Overslaan',
    'name'                           => 'Naam',
    'active'                         => 'Actief',
    'amount_min'                     => 'Minimumbedrag',
    'amount_max'                     => 'Maximumbedrag',
    'match'                          => 'Reageert op',
    'repeat_freq'                    => 'Herhaling',
    'journal_currency_id'            => 'Valuta',
    'currency_id'                    => 'Valuta',
    'attachments'                    => 'Bijlagen',
    'journal_amount'                 => 'Bedrag',
    'journal_asset_source_account'   => 'Betaalrekening (bron)',
    'journal_source_account_name'    => 'Debiteur (bron)',
    'journal_source_account_id'      => 'Betaalrekening (bron)',
    'BIC'                            => 'BIC',
    'account_from_id'                => 'Van account',
    'account_to_id'                  => 'Naar account',
    'source_account'                 => 'Bronrekening',
    'destination_account'            => 'Doelrekening',
    'journal_destination_account_id' => 'Betaalrekening (doel)',
    'asset_destination_account'      => 'Betaalrekening (doel)',
    'asset_source_account'           => 'Betaalrekening (bron)',
    'journal_description'            => 'Omschrijving',
    'note'                           => 'Notities',
    'split_journal'                  => 'Splits deze transactie',
    'split_journal_explanation'      => 'Splits deze transactie in meerdere stukken',
    'currency'                       => 'Valuta',
    'account_id'                     => 'Betaalrekening',
    'budget_id'                      => 'Budget',
    'openingBalance'                 => 'Startsaldo',
    'tagMode'                        => 'Tag modus',
    'tagPosition'                    => 'Tag locatie',
    'virtualBalance'                 => 'Virtuele saldo',
    'longitude_latitude'             => 'Locatie',
    'targetamount'                   => 'Doelbedrag',
    'accountRole'                    => 'Rol van rekening',
    'openingBalanceDate'             => 'Startsaldodatum',
    'ccType'                         => 'Betaalplan',
    'ccMonthlyPaymentDate'           => 'Betaaldatum',
    'piggy_bank_id'                  => 'Spaarpotje',
    'returnHere'                     => 'Keer terug',
    'returnHereExplanation'          => 'Terug naar deze pagina na het opslaan.',
    'returnHereUpdateExplanation'    => 'Terug naar deze pagina na het wijzigen.',
    'description'                    => 'Omschrijving',
    'expense_account'                => 'Crediteur',
    'revenue_account'                => 'Debiteur',
    'decimal_places'                 => 'Aantal decimalen',

    'revenue_account_source'      => 'Debiteur (bron)',
    'source_account_asset'        => 'Bronrekening (betaalrekening)',
    'destination_account_expense' => 'Doelrekening (crediteur)',
    'destination_account_asset'   => 'Doelrekening (betaalrekening)',
    'source_account_revenue'      => 'Bronrekening (debiteur)',
    'type'                        => 'Type',
    'convert_Withdrawal'          => 'Verander uitgave',
    'convert_Deposit'             => 'Verander inkomsten',
    'convert_Transfer'            => 'Verander overschrijving',


    'amount'                     => 'Bedrag',
    'date'                       => 'Datum',
    'interest_date'              => 'Rentedatum',
    'book_date'                  => 'Boekdatum',
    'process_date'               => 'Verwerkingsdatum',
    'category'                   => 'Categorie',
    'tags'                       => 'Tags',
    'deletePermanently'          => 'Verwijderen',
    'cancel'                     => 'Annuleren',
    'targetdate'                 => 'Doeldatum',
    'tag'                        => 'Tag',
    'under'                      => 'Onder',
    'symbol'                     => 'Symbool',
    'code'                       => 'Code',
    'iban'                       => 'IBAN',
    'accountNumber'              => 'Rekeningnummer',
    'has_headers'                => 'Kolomnamen op de eerste rij?',
    'date_format'                => 'Datumformaat',
    'specifix'                   => 'Bank- or of bestandsspecifieke opties',
    'attachments[]'              => 'Bijlagen',
    'store_new_withdrawal'       => 'Nieuwe uitgave opslaan',
    'store_new_deposit'          => 'Nieuwe inkomsten opslaan',
    'store_new_transfer'         => 'Nieuwe overschrijving opslaan',
    'add_new_withdrawal'         => 'Maak nieuwe uitgave',
    'add_new_deposit'            => 'Maak nieuwe inkomsten',
    'add_new_transfer'           => 'Maak nieuwe overschrijving',
    'noPiggybank'                => '(geen spaarpotje)',
    'title'                      => 'Titel',
    'notes'                      => 'Notities',
    'filename'                   => 'Bestandsnaam',
    'mime'                       => 'Bestandstype',
    'size'                       => 'Grootte',
    'trigger'                    => 'Trigger',
    'stop_processing'            => 'Stop met verwerken',
    'start_date'                 => 'Start van bereik',
    'end_date'                   => 'Einde van bereik',
    'export_start_range'         => 'Start van exportbereik',
    'export_end_range'           => 'Einde van exportbereik',
    'export_format'              => 'Bestandsformaat',
    'include_attachments'        => 'Sla ook geüploade bijlagen op',
    'include_old_uploads'        => 'Sla ook geïmporteerde bestanden op',
    'accounts'                   => 'Exporteer boekingen van deze rekeningen',
    'delete_account'             => 'Verwijder rekening ":name"',
    'delete_bill'                => 'Verwijder contract ":name"',
    'delete_budget'              => 'Verwijder budget ":name"',
    'delete_category'            => 'Verwijder categorie ":name"',
    'delete_currency'            => 'Verwijder valuta ":name"',
    'delete_journal'             => 'Verwijder transactie met omschrijving ":description"',
    'delete_attachment'          => 'Verwijder bijlage ":name"',
    'delete_rule'                => 'Verwijder regel ":title"',
    'delete_rule_group'          => 'Verwijder regelgroep ":title"',
    'attachment_areYouSure'      => 'Weet je zeker dat je de bijlage met naam ":name" wilt verwijderen?',
    'account_areYouSure'         => 'Weet je zeker dat je de rekening met naam ":name" wilt verwijderen?',
    'bill_areYouSure'            => 'Weet je zeker dat je het contract met naam ":name" wilt verwijderen?',
    'rule_areYouSure'            => 'Weet je zeker dat je regel ":title" wilt verwijderen?',
    'ruleGroup_areYouSure'       => 'Weet je zeker dat je regelgroep ":title" wilt verwijderen?',
    'budget_areYouSure'          => 'Weet je zeker dat je het budget met naam ":name" wilt verwijderen?',
    'category_areYouSure'        => 'Weet je zeker dat je het category met naam ":name" wilt verwijderen?',
    'currency_areYouSure'        => 'Weet je zeker dat je de valuta met naam ":name" wilt verwijderen?',
    'piggyBank_areYouSure'       => 'Weet je zeker dat je het spaarpotje met naam ":name" wilt verwijderen?',
    'journal_areYouSure'         => 'Weet je zeker dat je de transactie met naam ":description" wilt verwijderen?',
    'mass_journal_are_you_sure'  => 'Weet je zeker dat je al deze transacties wilt verwijderen?',
    'tag_areYouSure'             => 'Weet je zeker dat je de tag met naam ":tag" wilt verwijderen?',
    'permDeleteWarning'          => 'Dingen verwijderen uit Firefly is permanent en kan niet ongedaan gemaakt worden.',
    'mass_make_selection'        => 'Je kan items alsnog redden van de ondergang door het vinkje weg te halen.',
    'delete_all_permanently'     => 'Verwijder geselecteerde items permanent',
    'update_all_journals'        => 'Wijzig deze transacties',
    'also_delete_transactions'   => 'Ook de enige transactie verbonden aan deze rekening wordt verwijderd.|Ook alle :count transacties verbonden aan deze rekening worden verwijderd.',
    'also_delete_rules'          => 'De enige regel in deze regelgroep wordt ook verwijderd.|Alle :count regels in deze regelgroep worden ook verwijderd.',
    'also_delete_piggyBanks'     => 'Ook het spaarpotje verbonden aan deze rekening wordt verwijderd.|Ook alle :count spaarpotjes verbonden aan deze rekening worden verwijderd.',
    'bill_keep_transactions'     => 'De transactie verbonden aan dit contract blijft bewaard.|De :count transacties verbonden aan dit contract blijven bewaard.',
    'budget_keep_transactions'   => 'De transactie verbonden aan dit budget blijft bewaard.|De :count transacties verbonden aan dit budget blijven bewaard.',
    'category_keep_transactions' => 'De transactie verbonden aan deze categorie blijft bewaard.|De :count transacties verbonden aan deze categorie blijven bewaard.',
    'tag_keep_transactions'      => 'De transactie verbonden aan deze tag blijft bewaard.|De :count transacties verbonden aan deze tag blijven bewaard.',

    'email'                 => 'E-mailadres',
    'password'              => 'Wachtwoord',
    'password_confirmation' => 'Wachtwoord (nogmaals)',
    'blocked'               => 'Is geblokkeerd?',
    'blocked_code'          => 'Reden voor blokkade',


    // admin
    'domain'                => 'Domein',
    'single_user_mode'      => 'Enkele gebruiker-modus',
    'must_confirm_account'  => 'Nieuwe gebruikers moeten hun account activeren',
    'is_demo_site'          => 'Is demo website',


    // import
    'import_file'           => 'Importbestand',
    'configuration_file'    => 'Configuratiebestand',
    'import_file_type'      => 'Importbestandstype',
    'csv_comma'             => 'Een komma (,)',
    'csv_semicolon'         => 'Een puntkomma (;)',
    'csv_tab'               => 'Een tab (onzichtbaar)',
    'csv_delimiter'         => 'CSV scheidingsteken',
    'csv_import_account'    => 'Standaard rekening voor importeren',
    'csv_config'            => 'Configuratiebestand',


    'due_date'           => 'Vervaldatum',
    'payment_date'       => 'Betalingsdatum',
    'invoice_date'       => 'Factuurdatum',
    'internal_reference' => 'Interne verwijzing',
];
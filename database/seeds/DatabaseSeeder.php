<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AccessTableSeeder::class);
        $this->call(HistoryTypeTableSeeder::class);
        $this->call(EmailTemplateTypeTableSeeder::class);
        $this->call(EmailTemplatePlaceholderTableSeeder::class);
        $this->call(EmailTemplateTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
		//$this->call(UsersTableSeeder::class);
        $this->call(WalletsTableSeeder::class);
        $this->call(TransactionsTableSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(CardsOrderTableSeeder::class);
        $this->call(ReferralProgramSeeder::class);
        $this->call(CardTableSeeder::class);


        Model::reguard();
    }
}

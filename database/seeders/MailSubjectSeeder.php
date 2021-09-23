<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MailSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mail_subjects')->insert([
            [
                'subject' => 'Besoin de conseils'
            ],
            [
                'subject' => 'Demande d\'information supplémentaires'
            ],
            [
                'subject' => 'Devis'
            ],
        ]);
    }
}

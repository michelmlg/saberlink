<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BaitCategory;

class BaitCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        BaitCategory::create(['nm_category' => 'E-books']);
        BaitCategory::create(['nm_category' => 'Software']);
        BaitCategory::create(['nm_category' => 'Videos']);
        // Adicione quantas categorias desejar
    }
}

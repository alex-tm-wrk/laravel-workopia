<?php

namespace Database\Seeders;

use App\Models\Applicant;
use App\Models\Job;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Truncate tables
        Schema::disableForeignKeyConstraints();
        DB::table('job_user_bookmarks')->truncate();
        Applicant::truncate();
        Job::truncate();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $this->call(TestUserSeeder::class);
        $this->call(RandomUserSeeder::class);
        $this->call(JobSeeder::class);
        $this->call(BookmarkSeeder::class);
    }
}

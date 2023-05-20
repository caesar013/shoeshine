<?php

namespace Database\Seeders;

use App\Models\STATUS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class STATUSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'name' => 'Pending Approval',
                'description' => 'Indicates that the transaction has been submitted and is awaiting approval from an authorized person or entity.',
            ],
            [
                'name' => 'Approved',
                'description' => 'Signifies that the transaction has been reviewed and approved.',
            ],
            [
                'name' => 'Rejected',
                'description' => 'Indicates that the transaction has been reviewed and rejected.',
            ],
            [
                'name' => 'Cancelled',
                'description' => 'Represents a transaction that has been cancelled or voided.',
            ],
            [
                'name' => 'In Progress',
                'description' => 'Signifies that the transaction is currently in progress.',
            ],
            [
                'name' => 'Completed',
                'description' => 'Indicates that the transaction has been completed successfully.',
            ],
            [
                'name' => 'On Hold',
                'description' => 'Represents a transaction that is temporarily suspended or put on hold.',
            ],
            // Add more statuses here
        ];

        foreach ($statuses as $status) {
            STATUS::forceCreate($status);
        }
    }
}

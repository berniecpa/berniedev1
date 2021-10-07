<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'product_management_access',
            ],
            [
                'id'    => 39,
                'title' => 'product_category_create',
            ],
            [
                'id'    => 40,
                'title' => 'product_category_edit',
            ],
            [
                'id'    => 41,
                'title' => 'product_category_show',
            ],
            [
                'id'    => 42,
                'title' => 'product_category_delete',
            ],
            [
                'id'    => 43,
                'title' => 'product_category_access',
            ],
            [
                'id'    => 44,
                'title' => 'product_tag_create',
            ],
            [
                'id'    => 45,
                'title' => 'product_tag_edit',
            ],
            [
                'id'    => 46,
                'title' => 'product_tag_show',
            ],
            [
                'id'    => 47,
                'title' => 'product_tag_delete',
            ],
            [
                'id'    => 48,
                'title' => 'product_tag_access',
            ],
            [
                'id'    => 49,
                'title' => 'product_create',
            ],
            [
                'id'    => 50,
                'title' => 'product_edit',
            ],
            [
                'id'    => 51,
                'title' => 'product_show',
            ],
            [
                'id'    => 52,
                'title' => 'product_delete',
            ],
            [
                'id'    => 53,
                'title' => 'product_access',
            ],
            [
                'id'    => 54,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 55,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 56,
                'title' => 'asset_management_access',
            ],
            [
                'id'    => 57,
                'title' => 'asset_category_create',
            ],
            [
                'id'    => 58,
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => 59,
                'title' => 'asset_category_show',
            ],
            [
                'id'    => 60,
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => 61,
                'title' => 'asset_category_access',
            ],
            [
                'id'    => 62,
                'title' => 'asset_location_create',
            ],
            [
                'id'    => 63,
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => 64,
                'title' => 'asset_location_show',
            ],
            [
                'id'    => 65,
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => 66,
                'title' => 'asset_location_access',
            ],
            [
                'id'    => 67,
                'title' => 'asset_status_create',
            ],
            [
                'id'    => 68,
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => 69,
                'title' => 'asset_status_show',
            ],
            [
                'id'    => 70,
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => 71,
                'title' => 'asset_status_access',
            ],
            [
                'id'    => 72,
                'title' => 'asset_create',
            ],
            [
                'id'    => 73,
                'title' => 'asset_edit',
            ],
            [
                'id'    => 74,
                'title' => 'asset_show',
            ],
            [
                'id'    => 75,
                'title' => 'asset_delete',
            ],
            [
                'id'    => 76,
                'title' => 'asset_access',
            ],
            [
                'id'    => 77,
                'title' => 'assets_history_access',
            ],
            [
                'id'    => 78,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 79,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 80,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 81,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 82,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 83,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 84,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 85,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 86,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 87,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 88,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 89,
                'title' => 'task_create',
            ],
            [
                'id'    => 90,
                'title' => 'task_edit',
            ],
            [
                'id'    => 91,
                'title' => 'task_show',
            ],
            [
                'id'    => 92,
                'title' => 'task_delete',
            ],
            [
                'id'    => 93,
                'title' => 'task_access',
            ],
            [
                'id'    => 94,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 95,
                'title' => 'expense_management_access',
            ],
            [
                'id'    => 96,
                'title' => 'expense_category_create',
            ],
            [
                'id'    => 97,
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => 98,
                'title' => 'expense_category_show',
            ],
            [
                'id'    => 99,
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => 100,
                'title' => 'expense_category_access',
            ],
            [
                'id'    => 101,
                'title' => 'income_category_create',
            ],
            [
                'id'    => 102,
                'title' => 'income_category_edit',
            ],
            [
                'id'    => 103,
                'title' => 'income_category_show',
            ],
            [
                'id'    => 104,
                'title' => 'income_category_delete',
            ],
            [
                'id'    => 105,
                'title' => 'income_category_access',
            ],
            [
                'id'    => 106,
                'title' => 'expense_create',
            ],
            [
                'id'    => 107,
                'title' => 'expense_edit',
            ],
            [
                'id'    => 108,
                'title' => 'expense_show',
            ],
            [
                'id'    => 109,
                'title' => 'expense_delete',
            ],
            [
                'id'    => 110,
                'title' => 'expense_access',
            ],
            [
                'id'    => 111,
                'title' => 'income_create',
            ],
            [
                'id'    => 112,
                'title' => 'income_edit',
            ],
            [
                'id'    => 113,
                'title' => 'income_show',
            ],
            [
                'id'    => 114,
                'title' => 'income_delete',
            ],
            [
                'id'    => 115,
                'title' => 'income_access',
            ],
            [
                'id'    => 116,
                'title' => 'expense_report_create',
            ],
            [
                'id'    => 117,
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => 118,
                'title' => 'expense_report_show',
            ],
            [
                'id'    => 119,
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => 120,
                'title' => 'expense_report_access',
            ],
            [
                'id'    => 121,
                'title' => 'client_management_setting_access',
            ],
            [
                'id'    => 122,
                'title' => 'currency_create',
            ],
            [
                'id'    => 123,
                'title' => 'currency_edit',
            ],
            [
                'id'    => 124,
                'title' => 'currency_show',
            ],
            [
                'id'    => 125,
                'title' => 'currency_delete',
            ],
            [
                'id'    => 126,
                'title' => 'currency_access',
            ],
            [
                'id'    => 127,
                'title' => 'transaction_type_create',
            ],
            [
                'id'    => 128,
                'title' => 'transaction_type_edit',
            ],
            [
                'id'    => 129,
                'title' => 'transaction_type_show',
            ],
            [
                'id'    => 130,
                'title' => 'transaction_type_delete',
            ],
            [
                'id'    => 131,
                'title' => 'transaction_type_access',
            ],
            [
                'id'    => 132,
                'title' => 'income_source_create',
            ],
            [
                'id'    => 133,
                'title' => 'income_source_edit',
            ],
            [
                'id'    => 134,
                'title' => 'income_source_show',
            ],
            [
                'id'    => 135,
                'title' => 'income_source_delete',
            ],
            [
                'id'    => 136,
                'title' => 'income_source_access',
            ],
            [
                'id'    => 137,
                'title' => 'client_status_create',
            ],
            [
                'id'    => 138,
                'title' => 'client_status_edit',
            ],
            [
                'id'    => 139,
                'title' => 'client_status_show',
            ],
            [
                'id'    => 140,
                'title' => 'client_status_delete',
            ],
            [
                'id'    => 141,
                'title' => 'client_status_access',
            ],
            [
                'id'    => 142,
                'title' => 'project_status_create',
            ],
            [
                'id'    => 143,
                'title' => 'project_status_edit',
            ],
            [
                'id'    => 144,
                'title' => 'project_status_show',
            ],
            [
                'id'    => 145,
                'title' => 'project_status_delete',
            ],
            [
                'id'    => 146,
                'title' => 'project_status_access',
            ],
            [
                'id'    => 147,
                'title' => 'client_management_access',
            ],
            [
                'id'    => 148,
                'title' => 'client_create',
            ],
            [
                'id'    => 149,
                'title' => 'client_edit',
            ],
            [
                'id'    => 150,
                'title' => 'client_show',
            ],
            [
                'id'    => 151,
                'title' => 'client_delete',
            ],
            [
                'id'    => 152,
                'title' => 'client_access',
            ],
            [
                'id'    => 153,
                'title' => 'project_create',
            ],
            [
                'id'    => 154,
                'title' => 'project_edit',
            ],
            [
                'id'    => 155,
                'title' => 'project_show',
            ],
            [
                'id'    => 156,
                'title' => 'project_delete',
            ],
            [
                'id'    => 157,
                'title' => 'project_access',
            ],
            [
                'id'    => 158,
                'title' => 'note_create',
            ],
            [
                'id'    => 159,
                'title' => 'note_edit',
            ],
            [
                'id'    => 160,
                'title' => 'note_show',
            ],
            [
                'id'    => 161,
                'title' => 'note_delete',
            ],
            [
                'id'    => 162,
                'title' => 'note_access',
            ],
            [
                'id'    => 163,
                'title' => 'document_create',
            ],
            [
                'id'    => 164,
                'title' => 'document_edit',
            ],
            [
                'id'    => 165,
                'title' => 'document_show',
            ],
            [
                'id'    => 166,
                'title' => 'document_delete',
            ],
            [
                'id'    => 167,
                'title' => 'document_access',
            ],
            [
                'id'    => 168,
                'title' => 'transaction_create',
            ],
            [
                'id'    => 169,
                'title' => 'transaction_edit',
            ],
            [
                'id'    => 170,
                'title' => 'transaction_show',
            ],
            [
                'id'    => 171,
                'title' => 'transaction_delete',
            ],
            [
                'id'    => 172,
                'title' => 'transaction_access',
            ],
            [
                'id'    => 173,
                'title' => 'client_report_create',
            ],
            [
                'id'    => 174,
                'title' => 'client_report_edit',
            ],
            [
                'id'    => 175,
                'title' => 'client_report_show',
            ],
            [
                'id'    => 176,
                'title' => 'client_report_delete',
            ],
            [
                'id'    => 177,
                'title' => 'client_report_access',
            ],
            [
                'id'    => 178,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 179,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 180,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 181,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 182,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 183,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 184,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 185,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 186,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 187,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 188,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 189,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 190,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 191,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 192,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 193,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 194,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 195,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 196,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 197,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 198,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 199,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 200,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 201,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 202,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 203,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 204,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 205,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 206,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 207,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 208,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 209,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 210,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}

<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'تنظیمات پایگاه داده بر اساس رشته اتصال ارائه شده قابل شناسایی نیست.';
$lang['db_unable_to_connect'] = 'امکان اتصال به سرور پایگاه داده با استفاده از تنظیمات ارائه شده وجود ندارد.';
$lang['db_unable_to_select'] = 'امکان انتخاب پایگاه داده مشخص شده وجود ندارد: %s';
$lang['db_unable_to_create'] = 'امکان ایجاد پایگاه داده مشخص شده وجود ندارد: %s';
$lang['db_invalid_query'] = 'درخواست ارسالی شما معتبر نیست.';
$lang['db_must_set_table'] = 'باید جدول پایگاه داده مورد استفاده در درخواست خود را تنظیم کنید.';
$lang['db_must_use_set'] = 'برای به‌روزرسانی یک ورودی باید از روش "set" استفاده کنید.';
$lang['db_must_use_index'] = 'باید یک شاخص برای تطبیق در به‌روزرسانی گروهی مشخص کنید.';
$lang['db_batch_missing_index'] = 'یک یا چند سطر ارسال شده برای به‌روزرسانی گروهی شاخص مشخص شده را ندارند.';
$lang['db_must_use_where'] = 'به‌روزرسانی‌ها فقط در صورتی مجاز هستند که شامل عبارت "where" باشند.';
$lang['db_del_must_use_where'] = 'حذف‌ها فقط در صورتی مجاز هستند که شامل عبارت "where" یا "like" باشند.';
$lang['db_field_param_missing'] = 'برای واکشی فیلدها، نام جدول به عنوان یک پارامتر لازم است.';
$lang['db_unsupported_function'] = 'این ویژگی برای پایگاه داده‌ای که استفاده می‌کنید در دسترس نیست.';
$lang['db_transaction_failure'] = 'خطا در تراکنش: بازگشت به حالت قبلی انجام شد.';
$lang['db_unable_to_drop'] = 'امکان حذف پایگاه داده مشخص شده وجود ندارد.';
$lang['db_unsupported_feature'] = 'ویژگی پشتیبانی نشده توسط سکوی پایگاه داده‌ای که استفاده می‌کنید.';
$lang['db_unsupported_compression'] = 'فرمت فشرده‌سازی فایل انتخاب شده توسط سرور شما پشتیبانی نمی‌شود.';
$lang['db_filepath_error'] = 'امکان نوشتن داده در مسیر فایل ارائه شده وجود ندارد.';
$lang['db_invalid_cache_path'] = 'مسیر حافظه پنهانی که ارائه شده معتبر یا قابل نوشتن نیست.';
$lang['db_table_name_required'] = 'نام جدول برای این عملیات لازم است.';
$lang['db_column_name_required'] = 'نام ستون برای این عملیات لازم است.';
$lang['db_column_definition_required'] = 'تعریف ستون برای این عملیات لازم است.';
$lang['db_unable_to_set_charset'] = 'امکان تنظیم مجموعه کاراکترهای اتصال کلاینت وجود ندارد: %s';
$lang['db_error_heading'] = 'یک خطای پایگاه داده رخ داده است';

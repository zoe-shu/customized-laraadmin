<?php
/**
 * Migration genrated using LaraAdmin
 * Help: http://laraadmin.com
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Dwij\Laraadmin\Models\Module;

class CreateTestingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Module::generate("Testings", 'testings', 'slug', 'fa-file-text', [
            ["slug", "slug", "TextField", false, "", 0, 256, false],
            ["address", "Address", "Address", false, "", 0, 256, false],
            ["checkbox", "checkbox", "Checkbox", false, "", 0, 0, false],
            ["currency", "currency", "Currency", false, "", 0, 11, false],
            ["date", "date", "Date", false, "", 0, 0, false],
            ["datetime", "datetime", "Datetime", false, "", 0, 0, false],
            ["decimal", "decimal", "Decimal", false, "", 0, 11, false],
            ["dropdown", "dropdown", "Dropdown", false, "", 0, 0, false, "@users"],
            ["email", "email", "Email", false, "", 0, 256, false],
            ["file", "file", "File", false, "", 0, 0, false],
            ["float", "float", "Float", false, "", 0, 11, false],
            ["html", "html", "HTML", false, "", 0, 0, false],
            ["image", "image", "Image", false, "", 0, 0, false],
            ["integer", "integer", "Integer", false, "", 0, 11, false],
            ["mobile", "mobile", "Mobile", false, "", 0, 20, false],
            ["multiselect", "multiselect", "Multiselect", false, "", 0, 0, false, "@users"],
            ["name", "name", "Name", false, "", 0, 256, false],
            ["password", "password", "Password", false, "", 0, 256, false],
            ["radio", "radio", "Radio", false, "", 0, 0, false, "@departments"],
            ["string", "string", "String", false, "", 0, 256, false],
            ["taginput", "taginput", "Taginput", false, "", 0, 256, false, "@departments"],
            ["textarea", "textarea", "Textarea", false, "", 0, 0, false],
            ["textfield", "textfield", "TextField", false, "", 0, 256, false],
            ["url", "url", "URL", false, "", 0, 256, false],
            ["multi_file", "files", "Files", false, "", 0, 0, false],
        ]);
		
		/*
		Row Format:
		["field_name_db", "Label", "UI Type", "Unique", "Default_Value", "min_length", "max_length", "Required", "Pop_values"]
        Module::generate("Module_Name", "Table_Name", "view_column_name" "Fields_Array");
        
		Module::generate("Books", 'books', 'name', [
            ["address",     "Address",      "Address",  false, "",          0,  1000,   true],
            ["restricted",  "Restricted",   "Checkbox", false, false,       0,  0,      false],
            ["price",       "Price",        "Currency", false, 0.0,         0,  0,      true],
            ["date_release", "Date of Release", "Date", false, "date('Y-m-d')", 0, 0,   false],
            ["time_started", "Start Time",  "Datetime", false, "date('Y-m-d H:i:s')", 0, 0, false],
            ["weight",      "Weight",       "Decimal",  false, 0.0,         0,  20,     true],
            ["publisher",   "Publisher",    "Dropdown", false, "Marvel",    0,  0,      false, ["Bloomsbury","Marvel","Universal"]],
            ["publisher",   "Publisher",    "Dropdown", false, 3,           0,  0,      false, "@publishers"],
            ["email",       "Email",        "Email",    false, "",          0,  0,      false],
            ["file",        "File",         "File",     false, "",          0,  1,      false],
            ["files",       "Files",        "Files",    false, "",          0,  10,     false],
            ["weight",      "Weight",       "Float",    false, 0.0,         0,  20.00,  true],
            ["biography",   "Biography",    "HTML",     false, "<p>This is description</p>", 0, 0, true],
            ["profile_image", "Profile Image", "Image", false, "img_path.jpg", 0, 250,  false],
            ["pages",       "Pages",        "Integer",  false, 0,           0,  5000,   false],
            ["mobile",      "Mobile",       "Mobile",   false, "+91  8888888888", 0, 20,false],
            ["media_type",  "Media Type",   "Multiselect", false, ["Audiobook"], 0, 0,  false, ["Print","Audiobook","E-book"]],
            ["media_type",  "Media Type",   "Multiselect", false, [2,3],    0,  0,      false, "@media_types"],
            ["name",        "Name",         "Name",     false, "John Doe",  5,  250,    true],
            ["password",    "Password",     "Password", false, "",          6,  250,    true],
            ["status",      "Status",       "Radio",    false, "Published", 0,  0,      false, ["Draft","Published","Unpublished"]],
            ["author",      "Author",       "String",   false, "JRR Tolkien", 0, 250,   true],
            ["genre",       "Genre",        "Taginput", false, ["Fantacy","Adventure"], 0, 0, false],
            ["description", "Description",  "Textarea", false, "",          0,  1000,   false],
            ["short_intro", "Introduction", "TextField",false, "",          5,  250,    true],
            ["website",     "Website",      "URL",      false, "http://dwij.in", 0, 0,  false],
        ]);
		*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('testings')) {
            Schema::drop('testings');
        }
    }
}

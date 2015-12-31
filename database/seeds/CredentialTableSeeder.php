<?php
require_once __DIR__ . '/BasicTableSeederAbstract.php';
class CredentialTableSeeder extends BasicTableSeederAbstract {
	protected $_entityName = App\Modules\System\Models\Credential::class;
}
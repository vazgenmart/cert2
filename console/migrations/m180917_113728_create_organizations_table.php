<?php

use yii\db\Migration;

/**
 * Handles the creation of table `organizations`.
 */
class m180917_113728_create_organizations_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('organizations', [
            'id' => $this->primaryKey(),
            'type' => "ENUM('Орган по сертификации','Испытательная лаборатория')",
            'sds' => 'ENUM("ФЕДЕРАЛЬНО БЮРО СЕРТИФИКАЦИИ","ЭКОЛОГИЧЕСКИЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ","100% ОРГАНИЧЕСКИЙ ПРОДУКТ","ПОЖАРНЫЙ КОНТРОЛЬ ОРГАНИЗАЦИЙ")',
            'accreditation_certificate' => $this->string(),
            'cert_created_date' => $this->date(),
            'cert_end_date' => $this->date(),
            'description' => $this->text(),
            'is_valid' => $this->boolean()->defaultValue(false)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('organizations');
    }
}

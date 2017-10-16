<?php
	/**
	 * @link      http://www.yiiframework.com/
	 * @copyright Copyright (c) 2008 Yii Software LLC
	 * @license   http://www.yiiframework.com/license/
	 */

	namespace yii\queue\db\migrations;

	use yii\db\Migration;

	/**
	 * Example of migration for queue message storage
	 */
	class M170822155600Pid extends Migration
	{
		public $tableName = '{{%queue}}';

		public function up ()
		{
			$this->addColumn($this->tableName, 'pid', $this->integer()->unsigned()->null());
			$this->addColumn($this->tableName, 'canceled_at', $this->integer()->null());
		}

		public function down ()
		{
			$this->dropColumn($this->tableName, 'canceled_at');
			$this->dropColumn($this->tableName, 'pid');
		}
	}

<?php

namespace Fuel\Migrations;

class Create_seasons
{
	public function up()
	{
		\DBUtil::create_table('seasons', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'quiz_name' => array('constraint' => 50, 'type' => 'varchar'),
			'quiz_date' => array('constraint' => 50, 'type' => 'varchar'),
			'quiz_time' => array('constraint' => 50, 'type' => 'varchar'),
			'quiz_venue' => array('constraint' => 50, 'type' => 'varchar'),
			'quiz_details' => array('constraint' => 1000, 'type' => 'varchar'),
			'team1_name' => array('constraint' => 50, 'type' => 'varchar'),
			'team1_1' => array('constraint' => 50, 'type' => 'varchar'),
			'team1_2' => array('constraint' => 50, 'type' => 'varchar'),
			'team1_3' => array('constraint' => 50, 'type' => 'varchar'),
			'team2_name' => array('constraint' => 50, 'type' => 'varchar'),
			'team2_1' => array('constraint' => 50, 'type' => 'varchar'),
			'team2_2' => array('constraint' => 50, 'type' => 'varchar'),
			'team2_3' => array('constraint' => 50, 'type' => 'varchar'),
			'team3_name' => array('constraint' => 50, 'type' => 'varchar'),
			'team3_1' => array('constraint' => 50, 'type' => 'varchar'),
			'team3_2' => array('constraint' => 50, 'type' => 'varchar'),
			'team3_3' => array('constraint' => 50, 'type' => 'varchar'),
			'photo_small' => array('constraint' => 100, 'type' => 'varchar'),
			'photo_large' => array('constraint' => 100, 'type' => 'varchar'),
			'slides' => array('constraint' => 3, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('seasons');
	}
}
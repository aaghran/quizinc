<?php

class Model_Season extends \Orm\Model {

    protected static $_properties = array(
        'id',
        'quiz_name',
        'quiz_date',
        'quiz_time',
        'quiz_venue',
        'quiz_details',
        'team1_name',
        'team1_1',
        'team1_2',
        'team1_3',
        'team2_name',
        'team2_1',
        'team2_2',
        'team2_3',
        'team3_name',
        'team3_1',
        'team3_2',
        'team3_3',
        'photo_small',
        'photo_large',
        'slides_id',
        'created_at',
        'updated_at',
    );
    protected static $_observers = array(
        'Orm\Observer_CreatedAt' => array(
            'events' => array('before_insert'),
            'mysql_timestamp' => false,
        ),
        'Orm\Observer_UpdatedAt' => array(
            'events' => array('before_update'),
            'mysql_timestamp' => false,
        ),
    );
    protected static $_table_name = 'teams';

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Init extends CI_Migration {
    public function up()
    {
        $queries = [
            'CREATE TABLE `agent` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_name_index` (`name`) USING BTREE,
  KEY `agent_phone_index` (`phone`) USING BTREE,
  KEY `agent_address_index` (`address`) USING BTREE,
  KEY `agent_lat_index` (`lat`) USING BTREE,
  KEY `agent_lon_index` (`lon`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `agent_agent_type` (
  `agent_id` int(10) unsigned NOT NULL,
  `agent_type_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`agent_id`,`agent_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `agent_bank` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agent_id` int(10) unsigned NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `bank_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `agent_person` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agent_id` int(11) unsigned NOT NULL,
  `code` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `identification` enum(\'KTP\',\'SIM\',\'PASSPORT\') DEFAULT NULL,
  `identification_id` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_person_agent_id_index` (`agent_id`) USING BTREE,
  KEY `agent_person_code_index` (`code`) USING BTREE,
  KEY `agent_person_phone_index` (`phone`) USING BTREE,
  KEY `agent_person_identification_index` (`identification`) USING BTREE,
  KEY `agent_person_identification_id_index` (`identification_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `agent_picture` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agent_id` int(10) unsigned NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_picture_agent_id_index` (`agent_id`) USING BTREE,
  KEY `agent_picture_filename_index` (`filename`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `agent_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  `agent_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_tag_tag_index` (`tag`) USING BTREE,
  KEY `agent_tag_agent_id_index` (`agent_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `agent_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `agent_type_name_index` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `area` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`name`),
  KEY `area_name_index` (`name`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `action` varchar(255) NOT NULL,
  `object` varchar(255) DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `key_1` varchar(255) DEFAULT NULL,
  `value_1` varchar(255) DEFAULT NULL,
  `key_2` varchar(255) DEFAULT NULL,
  `value_2` varchar(255) DEFAULT NULL,
  `key_3` varchar(255) DEFAULT NULL,
  `value_3` varchar(255) DEFAULT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `log_user_id_index` (`user_id`),
  KEY `log_action_index` (`action`),
  KEY `log_object_index` (`object`),
  KEY `log_object_id_index` (`object_id`),
  KEY `log_key_1_index` (`key_1`),
  KEY `log_value_1_index` (`value_1`),
  KEY `log_key_2_index` (`key_2`),
  KEY `log_value_2_index` (`value_2`),
  KEY `log_key_3_index` (`key_3`),
  KEY `log_value_3_index` (`value_3`),
  KEY `log_time_index` (`time`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `sales` (
  `user_id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `sales_code_unique` (`code`),
  UNIQUE KEY `sales_phone_unique` (`phone`),
  KEY `sales_phone_index` (`phone`) USING BTREE,
  KEY `sales_code_index` (`code`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `sales_area` (
  `user_id` int(10) unsigned NOT NULL,
  `area_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`area_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `sales_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(255) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_tag_tag_index` (`tag`) USING BTREE,
  KEY `sales_tag_user_id_index` (`user_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_disabled` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`),
  KEY `user_name_index` (`name`) USING BTREE,
  KEY `user_is_disabled_index` (`is_disabled`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
            'CREATE TABLE `user_role` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;'
        ];
        $this->db->trans_start();
        foreach ($queries as $query) {
            $this->db->query($query);
        }
        $this->db->trans_complete();
    }

    public function down()
    {
        $tables = [
            'agent',
            'agent_agent_type',
            'agent_bank',
            'agent_person',
            'agent_picture',
            'agent_tag',
            'agent_type',
            'area',
            'log',
            'role',
            'sales',
            'sales_area',
            'sales_tag',
            'user',
            'user_role'
        ];
        foreach ($tables as $table) {
            $this->dbforge->drop_table($table);
        }
    }
}
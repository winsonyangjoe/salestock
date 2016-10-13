<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Init extends CI_Migration {
    public function up()
    {
        $queries = [
            'CREATE TABLE `ci_sessions` (
  `id` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `data` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `last_activity` int(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
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
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;',
'CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
'CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shipping_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
'CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
'CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `meta` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;',
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;',
'CREATE TABLE `user_login_token` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `token` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `is_disabled` tinyint(3) unsigned DEFAULT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_login_token_user_id_index` (`user_id`) USING BTREE,
  KEY `user_login_token_token_index` (`token`) USING HASH,
  KEY `user_login_token_ip_address_index` (`ip_address`) USING BTREE,
  KEY `user_login_token_user_agent_index` (`user_agent`) USING BTREE,
  KEY `user_login_token_is_disabled_index` (`is_disabled`) USING HASH,
  KEY `user_login_token_time_index` (`time`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
'CREATE TABLE `user_role` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;',
'CREATE TABLE `voucher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_until` date DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;'
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
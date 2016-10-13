<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_User_login_token extends CI_Migration {
    public function up()
    {
        $this->db->trans_start();
        $this->db->query('CREATE TABLE `user_login_token` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');
        $this->db->trans_complete();
    }

    public function down()
    {
        $this->dbforge->drop_table('user_login_token');
    }
}
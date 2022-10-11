<?php

namespace PemrogramanWeb\Connection;

class Database
{
  private static ?\mysqli $connection = null;

  public static function getConnection()
  {
    if (is_null(self::$connection)) {
      self::$connection = new \mysqli("localhost", "root", "");
      self::$connection->select_db("scmp_web2");
    }

    return self::$connection;
  }
}

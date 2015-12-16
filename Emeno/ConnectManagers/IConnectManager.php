<?php
namespace Emeno\ConnectManagers;
interface IConnectManager
{
    const TIMEOUT = 120;
    public function setProperty($name, $val);
    public function getProperty($name);
    public function init();
    public function close();
    public function request($url);
}
?>
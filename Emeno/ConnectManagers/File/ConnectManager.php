<?php
namespace Emeno\ConnectManagers\File;
use Emeno\ConnectManagers\IConnectManager;

class ConnectManager implements IConnectManager
{
    protected $desc = false;
    public function setProperty($name, $val)
    {
    }
    public function getProperty($name)
    {
    }
    public function init()
    {
        $this->desc = @fopen("d:/internet_downloads/test.log", "r");
    }
    public function close()
    {
        if($this->desc){
            @fclose($this->desc);
        }
    }
    public function request($url)
    {
        $lines = array();
        while($tmp = @fgets($this->desc)){
            $lines[] = str_replace(array("\r", "\n"), "", $tmp);
        }
    }
}
?>
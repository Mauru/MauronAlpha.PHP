<?PHP
namespace DEV\MauronAlpha {
use MauronAlpha as MauronAlpha;

spl_autoload_extensions(".php");
spl_autoload_register();

//1: We start out by determining WHAT we are dealing with

$core = new MauronAlpha\MauronAlpha_core();

print $core->IsInitialized;
}
?>
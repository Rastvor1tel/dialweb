<?
define('CWEBP_PATH', 'cwebp');
class MakeWebP {

  protected $url = '';
  protected $original = '';
  protected $cwebp = CWEBP_PATH;
  public $image = '';

  public function __construct(){
    $this->url = urldecode($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI']);
    $this->setOriginal();
    $this->convert();
  }

  private function setOriginal(){
    preg_match('/^(.*\.)webp$/', $this->url, $match);
    $jpg = $match[1] . 'jpg';
    $jpeg = $match[1] . 'jpeg';
    $png = $match[1] . 'png';
    if(file_exists($jpg)){
      $this->original = $jpg;
    }
    elseif(file_exists($jpg)){
      $this->original = $jpeg;
    }
    elseif(file_exists($png)){
      $this->original = $png;
    }
  }

  protected function convert(){
    $command = $this->cwebp . ' -q 80 '.$this->original.' -o '.$this->url.'';
    exec($command);

    if(file_exists($this->url))
      $this->image = file_get_contents($this->url);
    else
      $this->image = file_get_contents($this->original);
  }
}

$webp = new MakeWebP();

header("content-type: image/webp");
header("Cache-control: public");
header("Expires: " . gmdate("D, d M Y H:i:s", time() + 60*60*24*365.25) . " GMT");
echo $webp->image;

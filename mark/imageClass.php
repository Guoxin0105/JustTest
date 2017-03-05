<?php
class Image{
	/**
	 * 内存中的图片
	 */
	private $image;
	/**
	 * 图片的基本信息
	 */
	 private $info;

	 /**
	  * 打开一张图片读取到内存中
	  */
	public function __construct($src){
		$info = getimagesize($src);
		$this->info = array(
			'width'=>$info[0],
			'height'=>$info[1],
			'type'=>image_type_to_extension($info[2],false),
			'mime'=>$info['mime']
			);
		$fun ="imagecreatefrom{$this->info['type']}";
		$this->image = $fun($src);
		
	}

	/**
	 * 操作图片 (压缩)
	 */
	public function thumb($width,$height){
		$imageThumb = imagecreatetruecolor($width,$height);
		imagecopyresampled($imageThumb,$this->image,0,0,0,0,$width,$height,$this->info['width'],$this->info['height']);
		imagedestroy($this->image);
		$this->image = $imageThumb;
	}

	/**
	 * 操作图片（添加文字水印）
	 */
	public function fontMark($content,$fontUrl,$size,$color,$local,$angle){
		$col = imagecolorallocatealpha($this->image, $color[0], $color[1], $color[2], $color[3]);
		imagettftext($this->image,$size,$angle,$local['x'],$local['y'],$col,$fontUrl,$content);
	}

	/**
	 * 操作图片（添加图片水印）
	 */
	public function imageMark($source,$local){
		$info2 = getimagesize($source);
		$type2 = image_type_to_extension($info2[2],false);
		$fun2 = "imagecreatefrom{$type2}";
		$image2 = $fun2($source);
		imagecopy($this->image,$image2,$local['x'],$local['y'],0,0,$info2[0],$info2[1]);
		imagedestroy($image2);
	}

	/**
	 * 在浏览器中输出图片
	 */

	public function show(){
		header('content-type:'.$this->info['mime']);
		$func = "image{$this->info['type']}";
		$func($this->image);

	}

	/**
	 * 把图片保存在硬盘里
	 */
	public function save($newname){
		$func = "image{$this->info['type']}";
		$func($this->image,$newname,'.'.$this->info['type']);

	}

	/**
	 * 销毁图片
	 */
	public function __destruct(){
		imagedestroy($this->image);
	}
}



?>
<?php
namespace App\Traits;
use Image;
use File;
use Storage;


trait filestorage
{

	public function storeimage( $image,  $destinationPath, $fileName ) {

        if($image) {
          $pathstored = public_path($destinationPath);
// 					if (!is_dir($pathstored)) {
//             mkdir($pathstored, 0775, true);
//         }
//           $img = Image::make($image);
// 					$img = $img->resize(1000, 1000, function ($constraint) {
//                 $constraint->aspectRatio();
//                 $constraint->upsize();
//             })->save($pathstored.$fileName, 80 );
        $image->move($pathstored, $fileName );

        }else{

        	flash('Invalid Image File!')->error()->important();
            return redirect()->back()->withInput();
        }

        return null;
    }
	
		public function storepdf( $pdffile,  $destinationPath, $pdfname ) {

        if($pdffile) {
        $pathstored = public_path($destinationPath);
        $pdffile->move($pathstored, $pdfname );

        }else{

        	flash('Invalid Pdf File!')->error()->important();
            return redirect()->back()->withInput();
        }

        return null;
    }


    public function storevideo( $video,  $destinationPath, $videoname) {

        if($video) {
           $pathstored = public_path($destinationPath);
           $video->move( $pathstored , $videoname );

        }else{

        	flash('Invalid Video File!')->error()->important();
            return redirect()->back()->withInput();
        }

        return null;
    }

    public function storeaudio( $audio,  $destinationPath, $audioname) {
        if($audio) {
           $pathstored = public_path($destinationPath);
           $audio->move( $pathstored , $audioname );

        }else{

            flash('Invalid Video File!')->error()->important();
            return redirect()->back()->withInput();
        }

        return null;
    }


    public function removefile($path){
        if($path){
        if(Storage::exists($path)) {
           unlink($path);
        }
        }else{
         flash('Invalid Video File!')->error()->important();
        }

        return null;
    }
	

}

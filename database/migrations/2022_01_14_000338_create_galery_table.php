<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateGaleriasTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('galery', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('url');
        });

        $images = [
            '23Jyl5b95lWJGjOdUPIR9aAbbXBFnaRyuLZgJFzj.png',
            'NBM2dRBZZVMSgQxcHxJoGWgjqRmlNVDPhxyjJ4Uf.png',
            'NOgc48mLL6XhnIrVex5HkcuYdQwvWLRodSrZVfTz.jpg',
            'QhFPDAewvQg1Wv1NG1HkHiaVAZAhGRKQTxDuwAWj.jpg',
            'fbOdNz675DBbohpxOhn44BHHWFb5IEfZbD9Z9Yfj.jpg',
            'gRCvJCPz5zSRW8H6SrZL6ihcDp4cE8UxYMFjF1NY.jpg',
            'tIEQZhJjhmsdCBBLBGTWprctnvW3bdgzvtH6NDuj.jpg',
            'uhzcKG38ejZqQXzplzdsRD5oJNw6R8YAmHbI18oY.jpg',
            'vqz9zTfMxTkrtqwBLWxneoPqLp5b2LWCNUQFYhgJ.png',
            'w0WRHHH4VWRARMhYy6iTdOFerGF9rXU9soujOTqQ.jpg',
            'xBcDE5XiuYCFa0Jha8I0IlG9laRWl0YdHYjOS91y.png',
            'yxSZGlo7iilaZ3kY9tqeXERhBbDHgF9ETJP9mWjb.jpg'
        ];

        foreach( $images as $image) {
            DB::table('galery')->insert(
                array(
                    'title' => "$image", 'description' => "$image", 'url' => "$image"
                )
           );
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('galery');
    }
}

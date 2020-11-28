<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Models\Posts([
            'title' => 'My first seed title',
            'name' => 'test seed name',
            'content' => 'this is the first content from a seed to go into the database.'
        ]);
        $post->save();

        for ($x = 1; $x <= 25; $x++){
            $post = new \App\Models\Posts([
                'title' => 'Seed title '. $x,
                'name' => 'seeder forloop',
                'content' => 'this content coming from forloop where x='. $x
            ]);
            $post->save();

            $post->categorys()->attach([1,2,3]);

            $comment_count = rand(0, 5);

            $lipsum = [
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in tellus a risus lobortis pharetra. In suscipit iaculis magna, et scelerisque erat dictum quis. Donec varius lobortis tincidunt. Ut molestie placerat neque, quis porttitor ligula sollicitudin non. Fusce consequat odio id lorem molestie, vel euismod mauris vestibulum. Phasellus convallis augue ut augue convallis congue. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc commodo sagittis vestibulum. Cras tortor eros, consequat eget quam tristique, elementum posuere tellus. Morbi dolor dui, rhoncus et leo quis, vestibulum pulvinar leo. Mauris vitae accumsan orci. Aliquam ligula lectus, feugiat non varius nec, rhoncus faucibus velit. Etiam bibendum ultricies leo eu auctor. Nam interdum turpis et arcu porttitor malesuada. Phasellus eu tristique enim. Nam non nisi libero.',
                'Nullam dictum dolor at mattis varius. Fusce ornare, arcu vel rutrum porttitor, tortor nisi ultrices nibh, sed suscipit nisl lacus eget metus. In viverra in erat sit amet tempus. In leo mauris, posuere nec leo eget, varius lacinia tortor. Nullam et sapien leo. Donec non euismod mi, ac feugiat est. Phasellus scelerisque elit nulla, non sodales sapien sodales ut. Sed maximus ultricies rutrum. Vivamus efficitur efficitur vehicula.',
                'Donec blandit orci nisi, porta luctus lorem dapibus a. Cras in tortor et est volutpat accumsan non eu enim. Ut iaculis venenatis sem ac gravida. Maecenas in tristique erat. Morbi volutpat sollicitudin bibendum. Cras ultrices ac ipsum non pharetra. Donec euismod mi eu placerat vestibulum. Nullam mattis ante vitae libero dictum, vitae rutrum augue elementum. Suspendisse potenti. Sed tincidunt erat libero, vitae vulputate nisl pulvinar vel.',
                'Aliquam ac elit ut quam ornare tincidunt sed ac magna. Vestibulum sagittis felis eget erat ornare, sit amet tempus enim faucibus. Morbi purus neque, placerat nec nisi vel, luctus fermentum ante. Curabitur eget congue eros. Phasellus eget quam et nulla vulputate tincidunt. Donec eu nibh sit amet nisl sollicitudin aliquet. Sed non tempus enim, in ullamcorper quam. Maecenas tincidunt posuere semper. Aenean porttitor tristique tincidunt. Curabitur bibendum arcu vitae dapibus auctor. Aliquam sed fermentum mauris. Phasellus sollicitudin tempor nulla ac posuere.',
                'Etiam tristique nibh velit, quis vulputate justo bibendum sit amet. Phasellus molestie vestibulum nibh non volutpat. Integer sit amet metus tortor. Morbi in justo quam. Mauris non nulla in mi convallis posuere vitae eu felis. Donec diam dolor, consectetur ac cursus a, commodo eu augue. Donec fringilla magna enim, at lacinia tellus feugiat nec. Donec eu auctor orci.',
            ];

            if ($comment_count > 0) {
                $comments = [];

                for ($y = 0; $y < $comment_count; $y++) {
                    $comments[] = new \App\Models\Comments([
                        'name' => 'Seed name '. explode(' ', $lipsum[$y])[0],
                        'comment' => $lipsum[$y]
                    ]);
                }

                $post->comments()->saveMany($comments);
            }
        }
    }
}

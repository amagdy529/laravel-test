<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Article;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first = factory(Article::class)->create();
        $second = factory(Article::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $articles = Article::archives();

        $this->assertCount(3, $articles);

        // $this->assertEquals([
        //     [
        //         "year" => $first->created_at->format('Y'),
        //         "month" =>  $first->created_at->format('F'),
        //         "published" => 1
                
        //     ],

        //     [
        //         "year" => $second->created_at->format('Y'),
        //         "month" =>  $second->created_at->format('F'),
        //         "published" => 1
                
        //     ],

        //     ], $articles);

    }
}

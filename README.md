# Samo/YoutubeIframe
## get youtube players iframes from URL or Video ID easily

# install 
`composer require samo/youtubeiframe`

# Usage 

## In controller 
```php
use Samo\YoutubeIframe\Iframe;
public function index() 
{
    $iframe = Iframe::css('border-radius:50px;')
            ->width(100,'%')
            ->height(400,'px')
            ->noFullScreen()
            ->get('https://www.youtube.com/watch?v=35JzR2ymxJE');
    return $iframe;
}
```
### Result:
 ![image of mr bing](https://i.ibb.co/vVkNjJh/1.jpg)
## In view 
```php html
<div class="video_container">
{!! \App\Samo\YoutubeIframe\Iframe::css('border-radius:50px;')
            ->width(100,'%')
            ->height(400,'px')
            ->noFullScreen()
            ->get('https://www.youtube.com/watch?v=35JzR2ymxJE')!!}
</div>

```
# Available methods:

## css($str)
Defines additional CSS properities sperated by ';'<br/>
Example : <br/>
`Iframe::css('border:1px solid #000;opacity:0.7')->get('35JzR2ymxJE');`

## height($val=300,$unit='px')
Sets the player height (Default is 300px) <br/>
Example : <br/>
`Iframe::height(500,'px')->get('35JzR2ymxJE');`
## width($val=500,$unit='px')
Sets the player width (default is 500px) <br/>
Example : <br/>
`Iframe::width(500,'px')->get('35JzR2ymxJE');`

## get($urlOrID)
Returns the Iframe markup you can pass URL or Video ID<br>
Accepted url format :<br/>
youtube.com/watch?v=xxxxxx<br/>
youtu.be.com/xxxxxxx<br/>
youtube.com/?v=xxxxxx<br/>

## noFullScreen()
disable full screen feature

## addAttribute($att)
adds a HTML attributes <br/>
Example : <br/>
`Iframe::addAttribute('class="pt-5"')->addAttribute('id="pl1")->get('35JzR2ymxJE');`




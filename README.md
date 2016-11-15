# TooT - Tweet random stuff with a tweet button

TooT was built for a friend who wanted to "water down" all the #NotMyPresident hashtags on twitter. His idea was that maybe if he had a way to mass-polute the hashtags, then he could essentially disrupt how it was being used on twitter and maybe annoy post-election protesters/rioters enough that they would eventually give up - essentially diffusing the tense atmosphere in our country after Trump was elected president. 

Personally, I think it's kind of spammy, but it sounded fun enough to play around with. I called it TooT because it's more like tooting than tweeting.

The way TooT is built, is basically to fit on the screen of an iPhone4s. It's built, minimally using Bootstrap and some custom CSS. The "well" at the top shows a preview of the toot (tweet) about to be published, plus a random city that the post-election protests are most prominent in. Once in the twitter window, (a user needs to be logged in to toot, obviously), the toot includes the word "trump" at the very beginning of the toot, then the toot itself, then the #NotMyPresident hashtag, and finally the name of a random city.

# On the Back-End

TooT takes a content file called content.txt and in turn removes most extra characters except for spaces. In the current version, content.txt is 1000 paragraphs of randomly generated hipster ipsum. In lipsum.php the content gets roughly formatted into a 100 character sequence of random words, excluding the hashtags, as the hashtags get added later in the button code that was copied over from twitter's button generator.

While the page gets reloaded every 10 seconds in order to generate a new toot, the hexidecimal background-color of the well gets randomly generated on every page load as well, basically giving my friend a visual indicator that a new toot was generated. The whole point is to make the process as easy as possible so my friend can toot from anywhere and any time, using his cell phone.




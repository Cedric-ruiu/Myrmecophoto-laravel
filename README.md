:warning::warning::warning:

This project was launched to migrate the "Myrmecophoto" website from the "CodeIgniter" framework to "Laravel", but development was stopped very early for many personal reasons. All I had done was address purely frontend points. Now my mind is "improved", and I prefer to move to a new architecture to migrate this website on ants macro-photography => [Visit the new repo based on Nuxt framework](https://github.com/Cedric-ruiu/myrmecophoto-vue)

:warning::warning::warning:

# Goals

1. Performance
2. Modern engine/concept (bye IE)
3. Accessible
4. Fun

# Breakpoints

I want to make simple as possible to call media-queries, free to use my personals breakpoints, and automatize units. [include-media](https://include-media.com/) it's a very good start. Just define my breakpoints and call a `@include media('>phone') { ... }`, for definition of breakpoints, i prefer those of Twitter Bootstrap, like this:

```
$breakpoints: (  
  xs: 320px,  
  sm: 576px,  
  md: 768px,  
  lg: 992px,  
  xl: 1200px  
) !default;
```

So now, a beautiful short call: `@include media('>xs') { ... }`. And it produce media-query with the unit was declared in `$unit-default`;

# Typography

Typography is complex... And like a children, i want many things, maybe a too lot of things...
- I want to provide accessible typography by given a [relative unit](https://www.24joursdeweb.fr/2013/lachez-prise-sans-perdre-le-controle-grace-a-l-unite-css-em/), I think it's a good start. 
- I want to provide the perfect size for all viewport size, not just break font-size between breakpoint. It is possible with css by using [poly-fluid-sizing](https://github.com/Jakobud/poly-fluid-sizing). It's a modern concept, and provide fun.
- I want to make it simple to use, don't want to calculate in my head a weird value in some units. Just keep it simple to develop my interfaces. [unitconversion](https://github.com/jakob-e/unitconversion) can do the job very well.

[include-media](https://include-media.com/), [poly-fluid-sizing](https://github.com/Jakobud/poly-fluid-sizing) and [unitconversion](https://github.com/jakob-e/unitconversion) seems to be the perfect triangle to do the job. But I found several issues. The first is that **poly-fluid-sizing** can't mix units between query and value. But if I want all in relative unit, [Safari have a bug](https://adamwathan.me/dont-use-em-for-media-queries/) with em/rem in media-queries when zoom (ex: 150%). So I need to make a choice...
  
1. Lost Safari users when they would zoom
(+) Use flexible typography  
(+) Use rem for font-size  
(=) Use rem for media-queries  
(-) Safari bug when user zoom  
2. Lost the fluid typography concept
(-) Use fixed typography, ugly break font-size between each breakpoint
(+) Use rem for font-size  
(=) Use px in media-queries  
(+) No Safari bug  
3. Lost the way of accessibility by adopting px for all case  
(+) Use flexible typography  
(-) Use px for font-size  
(=) Use px in media-queries  
(+) No Safari bug  

It's hard to choose a solution. So i provide the three solutions, just switch like i want in project :

1. Set `$unit-default: rem;` and `$typography-flexible: true;` => Website load a fluid typo and relative unit. Nice, modern, accessible, very fun, but sorry Safari users, just wait a fix. **This option is enabled by default in this website.**
2. Set `$unit-default: rem;` and `$typography-flexible: false;` => Accessible and no bug, cool, but we lost the advantage of flexible typography
3. Set `$unit-default: px;` and `$typography-flexible: true;` => Cool stuff, website have a flexible typo ! But lost a base of accessibility concept with px...

In my application, i don't need to keep in mind all these previous concept, engine work hard for me. So I just add:

```
.c-element {
  @include breakpoint-sizing(font-size, (sm: 18px, lg: 24px));
  @include breakpoint-sizing(padding-bottom, (sm: 5px, lg: 10px), px);
  margin-top: rem(10px);
  ...  
}
```

I Love it.

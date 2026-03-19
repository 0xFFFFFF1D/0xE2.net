---
layout: default
title: home
---
<h1>{{ "Welcome to my website." }}</h1>
<!--<span style="font-family: monospace;">[ <a href="http://users3.smartgb.com/g/g.php?a=s&amp;i=g36-40812-80">SIGN MY GUESTBOOK</a> ]</span>-->
<span style="font-family: monospace;">[[ <a href="https://0xE2.atabook.org" target="_blank">SIGN MY GUESTBOOK</a> ]]</span>
<hr>

<h2>Latest Blog Posts</h2>
{% for post in site.posts limit:2 %}
    From
    <a class="post-link" href="{{- post.url -}}">
        {{ post.date | date: '%Y-%m-%d' }}: {{ post.title }}
    </a><br >
    <blockquote>
        <span class="home-latest-excerpt">{{ post.content | strip_html | truncate: 100 }}</span>
    </blockquote>
{% endfor %}

<hr>
<h2>Latest Writing</h2>
{% for post in site.writing reversed limit:2 %}
    From
    <a class="post-link" href="{{- post.url -}}">
        {{ post.date | date: '%Y-%m-%d' }}: {{ post.title }}
    </a><br >
    <blockquote>
        <span class="home-latest-excerpt">{{ post.content | strip_html | truncatewords: 15 }}</span>
    </blockquote>
{% endfor %}
    <hr >
    <div style="text-align: center;">
    <h3 style="text-align: center;">언젠가, 나는 니 곁에 다시 돌아올게.</h3>

    <span class="stats">jekyll.version: {{ jekyll.version }}</span>
    <span class="stats">compiled: {{ site.time }}</span>
    <span class="stats">PHP: <?php echo phpversion(); ?></span>
    <span class="stats">Webserver: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></span>


    
    </div>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Netra - Teste Técnico - API API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users">
                                <a href="#endpoints-GETapi-users">GET api/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users--id-">
                                <a href="#endpoints-GETapi-users--id-">GET api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-users--userId--posts">
                                <a href="#endpoints-GETapi-users--userId--posts">GET api/users/{userId}/posts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-posts">
                                <a href="#endpoints-GETapi-posts">GET api/posts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-posts--id-">
                                <a href="#endpoints-GETapi-posts--id-">GET api/posts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tags">
                                <a href="#endpoints-GETapi-tags">GET api/tags</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tags-popular">
                                <a href="#endpoints-GETapi-tags-popular">GET api/tags/popular</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tags-search">
                                <a href="#endpoints-GETapi-tags-search">GET api/tags/search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tags--id-">
                                <a href="#endpoints-GETapi-tags--id-">GET api/tags/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-tags--tagId--posts">
                                <a href="#endpoints-GETapi-tags--tagId--posts">GET api/tags/{tagId}/posts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-login">
                                <a href="#endpoints-POSTapi-auth-login">POST api/auth/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-register">
                                <a href="#endpoints-POSTapi-auth-register">POST api/auth/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-auth-logout">
                                <a href="#endpoints-POSTapi-auth-logout">POST api/auth/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-auth-profile">
                                <a href="#endpoints-GETapi-auth-profile">GET api/auth/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-users">
                                <a href="#endpoints-POSTapi-users">POST api/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-users--id-">
                                <a href="#endpoints-PUTapi-users--id-">PUT api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-users--id-">
                                <a href="#endpoints-DELETEapi-users--id-">DELETE api/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-posts">
                                <a href="#endpoints-POSTapi-posts">POST api/posts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-posts--id-">
                                <a href="#endpoints-PUTapi-posts--id-">PUT api/posts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-posts--id-">
                                <a href="#endpoints-DELETEapi-posts--id-">DELETE api/posts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-posts--post_id--publish">
                                <a href="#endpoints-POSTapi-posts--post_id--publish">POST api/posts/{post_id}/publish</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-posts--post_id--unpublish">
                                <a href="#endpoints-POSTapi-posts--post_id--unpublish">POST api/posts/{post_id}/unpublish</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-tags">
                                <a href="#endpoints-POSTapi-tags">POST api/tags</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-tags--id-">
                                <a href="#endpoints-PUTapi-tags--id-">PUT api/tags/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-tags--id-">
                                <a href="#endpoints-DELETEapi-tags--id-">DELETE api/tags/{id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 25, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Token de acesso inv&aacute;lido ou expirado.&quot;,
    &quot;error&quot;: &quot;UNAUTHENTICATED&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-users">GET api/users</h2>

<p>
</p>



<span id="example-requests-GETapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;dfdf7436-566a-35a9-a78a-e4aea63f9f3d&quot;,
            &quot;name&quot;: &quot;Nicholas Runolfsson MD&quot;,
            &quot;email&quot;: &quot;amorar@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;08d46035-6ddb-3afa-af74-dd51d5771ea5&quot;,
            &quot;name&quot;: &quot;Prof. Ricardo Mitchell V&quot;,
            &quot;email&quot;: &quot;hilma66@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;18263fa4-f61e-3c39-a32c-91639cda2bb9&quot;,
            &quot;name&quot;: &quot;Melody Stokes DDS&quot;,
            &quot;email&quot;: &quot;hrussel@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;c68fc6a3-7038-3bc1-8172-b587648b4577&quot;,
            &quot;name&quot;: &quot;Miss America Senger III&quot;,
            &quot;email&quot;: &quot;rbednar@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;c2bd5225-fd12-333f-bf02-22251cd5ba1f&quot;,
            &quot;name&quot;: &quot;Ardella Waelchi&quot;,
            &quot;email&quot;: &quot;hannah27@example.org&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;acf0a2eb-2b60-3c7d-ad16-56eeb1734cb8&quot;,
            &quot;name&quot;: &quot;Iva Kohler&quot;,
            &quot;email&quot;: &quot;rklocko@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;003f29af-9b36-3c00-8b3f-c87cbee18790&quot;,
            &quot;name&quot;: &quot;Demond Volkman DVM&quot;,
            &quot;email&quot;: &quot;tswift@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;e488c5ce-3868-3952-8100-6877daef7e42&quot;,
            &quot;name&quot;: &quot;Reva Franecki V&quot;,
            &quot;email&quot;: &quot;jeff76@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;379a13b5-86df-3917-8478-071d9e6a4ef0&quot;,
            &quot;name&quot;: &quot;Arno Parker&quot;,
            &quot;email&quot;: &quot;stewart76@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;498129f8-f403-3640-9a7c-14b9ddb75344&quot;,
            &quot;name&quot;: &quot;Mrs. Therese Huels&quot;,
            &quot;email&quot;: &quot;crooks.lavon@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;0197a5bf-c4f8-7390-8b23-82eba2aaeab1&quot;,
            &quot;name&quot;: &quot;Jo&atilde;o Baronesa&quot;,
            &quot;email&quot;: &quot;baronesa@teste.com&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:37.000000Z&quot;
        },
        {
            &quot;id&quot;: &quot;0197a5d6-aa33-739a-8d43-79c82ec08891&quot;,
            &quot;name&quot;: &quot;John Doe&quot;,
            &quot;email&quot;: &quot;john@example.com&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:46:38.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:46:38.000000Z&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/users?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/users&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 12,
        &quot;total&quot;: 12
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users" data-method="GET"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users"
                    onclick="tryItOut('GETapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users"
                    onclick="cancelTryOut('GETapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-users--id-">GET api/users/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;dfdf7436-566a-35a9-a78a-e4aea63f9f3d&quot;,
        &quot;name&quot;: &quot;Nicholas Runolfsson MD&quot;,
        &quot;email&quot;: &quot;amorar@example.net&quot;,
        &quot;created_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--id-" data-method="GET"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--id-"
                    onclick="tryItOut('GETapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--id-"
                    onclick="cancelTryOut('GETapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-users--id-"
               value="dfdf7436-566a-35a9-a78a-e4aea63f9f3d"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>dfdf7436-566a-35a9-a78a-e4aea63f9f3d</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-users--userId--posts">GET api/users/{userId}/posts</h2>

<p>
</p>



<span id="example-requests-GETapi-users--userId--posts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d/posts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d/posts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-users--userId--posts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;c5f200d3-340b-3a9c-8a7f-5443703d717a&quot;,
            &quot;title&quot;: &quot;Aliquid error consequatur pariatur ut qui.&quot;,
            &quot;slug&quot;: &quot;aliquid-error-consequatur-pariatur-ut-qui&quot;,
            &quot;excerpt&quot;: &quot;Corporis dignissimos ut facere quod at. Voluptas distinctio similique accusantium nihil excepturi et. Inventore quia nihil ex ducimus numquam.&quot;,
            &quot;content&quot;: &quot;Ex ipsam sint tempore repellat et quisquam porro. Sit suscipit odit et accusantium ipsam quas. Tenetur non quisquam itaque sapiente ducimus.\n\nOdit suscipit et est voluptatem officiis facilis. Qui porro rem et molestiae. Illo sunt nostrum odio consequatur nam. Explicabo consequuntur animi reprehenderit mollitia.\n\nVoluptatem sit nostrum est molestiae. Porro corporis neque perspiciatis. Enim est voluptates voluptatibus totam minima. Animi est enim ut voluptatem.\n\nDoloribus totam et molestiae minus harum nemo qui delectus. Rerum et error esse libero alias velit deserunt voluptas. Quisquam aut recusandae laudantium repellat. Quidem voluptas et saepe omnis.\n\nUt et deserunt aut dicta et. Earum eius culpa id. Incidunt ratione autem in a rerum totam quasi quos. Dolorum iure ipsum deserunt ut enim. Qui a consequuntur quibusdam et recusandae ipsa nostrum ut.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/002277?text=nature+qui&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;dfdf7436-566a-35a9-a78a-e4aea63f9f3d&quot;,
                &quot;name&quot;: &quot;Nicholas Runolfsson MD&quot;,
                &quot;email&quot;: &quot;amorar@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;c65d0c93-63e0-3b28-8de3-323965348314&quot;,
                    &quot;name&quot;: &quot;Ad&quot;,
                    &quot;slug&quot;: &quot;ad&quot;,
                    &quot;color&quot;: &quot;#55bfa7&quot;,
                    &quot;description&quot;: &quot;Et corrupti impedit repellat doloribus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ad&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/aliquid-error-consequatur-pariatur-ut-qui&quot;
        },
        {
            &quot;id&quot;: &quot;ee6a65ae-0da5-3e2a-bc75-434d9dd22c18&quot;,
            &quot;title&quot;: &quot;Dicta laudantium dolores omnis vero magni magnam sit.&quot;,
            &quot;slug&quot;: &quot;dicta-laudantium-dolores-omnis-vero-magni-magnam-sit&quot;,
            &quot;excerpt&quot;: &quot;Ex officiis enim ipsa. Hic animi aut in est. Aut aut voluptas sunt magnam tempore.&quot;,
            &quot;content&quot;: &quot;Dignissimos voluptas voluptas ducimus saepe expedita. Iusto quo non in temporibus pariatur soluta quia. Enim vero illo earum et est. Placeat nostrum corporis voluptatibus rerum autem. Aliquid aut dolores fuga voluptatem minus et corrupti.\n\nEsse amet nihil officia rerum esse. Suscipit maiores excepturi ipsum corrupti. Veritatis cum voluptatibus modi voluptates qui.\n\nOdio dolorem voluptas doloremque alias ut blanditiis sapiente. Quia maiores sunt inventore necessitatibus. Non reiciendis voluptatum amet earum tenetur pariatur omnis.\n\nVoluptas aut similique incidunt nemo. Sequi dolor quo tenetur natus voluptatem necessitatibus. Nihil incidunt mollitia aliquam laudantium quia omnis nulla et. Repudiandae odio eos voluptatem officiis rerum natus veniam. Dolores voluptatem incidunt blanditiis eum autem.\n\nPossimus sint unde delectus. Molestias enim accusantium est magnam et est dolor. Quam itaque laborum maxime quasi quo dignissimos.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00ee88?text=nature+aut&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;dfdf7436-566a-35a9-a78a-e4aea63f9f3d&quot;,
                &quot;name&quot;: &quot;Nicholas Runolfsson MD&quot;,
                &quot;email&quot;: &quot;amorar@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;975e3e35-d1d4-3f38-9cf4-c83edc4daf73&quot;,
                    &quot;name&quot;: &quot;Laudantium&quot;,
                    &quot;slug&quot;: &quot;laudantium&quot;,
                    &quot;color&quot;: &quot;#5f00f2&quot;,
                    &quot;description&quot;: &quot;Neque voluptatem quia et excepturi consectetur voluptatem.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/laudantium&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/dicta-laudantium-dolores-omnis-vero-magni-magnam-sit&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d/posts?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d/posts?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d/posts?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d/posts&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-users--userId--posts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-users--userId--posts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-users--userId--posts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-users--userId--posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-users--userId--posts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-users--userId--posts" data-method="GET"
      data-path="api/users/{userId}/posts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-users--userId--posts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-users--userId--posts"
                    onclick="tryItOut('GETapi-users--userId--posts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-users--userId--posts"
                    onclick="cancelTryOut('GETapi-users--userId--posts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-users--userId--posts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/users/{userId}/posts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-users--userId--posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-users--userId--posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>userId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="userId"                data-endpoint="GETapi-users--userId--posts"
               value="dfdf7436-566a-35a9-a78a-e4aea63f9f3d"
               data-component="url">
    <br>
<p>Example: <code>dfdf7436-566a-35a9-a78a-e4aea63f9f3d</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-posts">GET api/posts</h2>

<p>
</p>



<span id="example-requests-GETapi-posts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/posts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/posts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-posts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;9135c4b0-30ac-3afe-b8f1-f428b5c205bf&quot;,
            &quot;title&quot;: &quot;Reprehenderit praesentium omnis velit hic.&quot;,
            &quot;slug&quot;: &quot;reprehenderit-praesentium-omnis-velit-hic&quot;,
            &quot;excerpt&quot;: &quot;Sit enim itaque ipsam distinctio voluptas. Maiores corrupti est distinctio. Impedit provident et possimus esse.&quot;,
            &quot;content&quot;: &quot;Tempore aspernatur aut harum facere a sit consequuntur. Et voluptatem dicta et deleniti. Amet earum beatae reiciendis tenetur necessitatibus.\n\nCum sit eveniet ut amet necessitatibus velit enim. Consequuntur molestiae consequatur fugiat esse quia ipsum similique. Expedita et esse ut quod eius necessitatibus ut. Molestiae nobis itaque nam veritatis et similique et.\n\nConsequatur atque doloribus excepturi suscipit eius omnis dolor. Mollitia eum nihil molestiae molestias. Quod incidunt voluptas temporibus et fugiat. Omnis quis provident exercitationem minima qui quis.\n\nSed quidem et suscipit. Ut magnam perspiciatis exercitationem nulla. Sit omnis nihil sapiente repudiandae nostrum dolor assumenda. Sed et enim ipsum eos non et enim.\n\nDolore molestiae deserunt exercitationem enim blanditiis aliquid. Ipsa delectus et id necessitatibus vel voluptatum. Quia vitae sapiente laborum et enim.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/0033cc?text=nature+sapiente&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;acf0a2eb-2b60-3c7d-ad16-56eeb1734cb8&quot;,
                &quot;name&quot;: &quot;Iva Kohler&quot;,
                &quot;email&quot;: &quot;rklocko@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;9803d4ae-51ef-3c77-bc68-97cb1cea5353&quot;,
                    &quot;name&quot;: &quot;Cupiditate&quot;,
                    &quot;slug&quot;: &quot;cupiditate&quot;,
                    &quot;color&quot;: &quot;#630e57&quot;,
                    &quot;description&quot;: &quot;Excepturi animi fugiat perferendis aut voluptatum distinctio ratione.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/cupiditate&quot;
                },
                {
                    &quot;id&quot;: &quot;31d3cbe2-f754-3fd7-91a2-4f6f2f0aad4c&quot;,
                    &quot;name&quot;: &quot;Velit&quot;,
                    &quot;slug&quot;: &quot;velit&quot;,
                    &quot;color&quot;: &quot;#38b945&quot;,
                    &quot;description&quot;: &quot;Porro odit et ad adipisci eos reprehenderit voluptates.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/velit&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/reprehenderit-praesentium-omnis-velit-hic&quot;
        },
        {
            &quot;id&quot;: &quot;d1948a75-8cf0-3dbe-be64-1314c253acaa&quot;,
            &quot;title&quot;: &quot;Illo qui amet suscipit ratione blanditiis facilis itaque.&quot;,
            &quot;slug&quot;: &quot;illo-qui-amet-suscipit-ratione-blanditiis-facilis-itaque&quot;,
            &quot;excerpt&quot;: &quot;Eius vero earum voluptas reiciendis harum. Quibusdam non rerum commodi magni perferendis. Fuga aut occaecati veniam.&quot;,
            &quot;content&quot;: &quot;Pariatur labore enim excepturi eum quia et aut. Debitis nulla debitis quod adipisci. Nisi ut debitis porro qui eaque. Eveniet maxime modi iste aut aut similique atque.\n\nQuae voluptatem ut delectus autem enim error at. Amet quisquam aut non officia sit sunt. Eius sint omnis in.\n\nCorporis itaque iusto tempore quis quod. Ducimus et dicta est ullam. Omnis nam assumenda quod. Excepturi voluptas in voluptatibus.\n\nEveniet omnis velit earum quam quia cupiditate. Nisi expedita quas et culpa est molestiae quia sunt. In sunt voluptas sunt voluptas rerum necessitatibus ad assumenda.\n\nDolores suscipit laudantium id hic. Et placeat et saepe atque ut quia. Sint nesciunt est sit reiciendis ducimus id odio.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00ee66?text=nature+aliquid&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;498129f8-f403-3640-9a7c-14b9ddb75344&quot;,
                &quot;name&quot;: &quot;Mrs. Therese Huels&quot;,
                &quot;email&quot;: &quot;crooks.lavon@example.com&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;a623ce4b-b432-3f9f-80b6-e9c237e7cefc&quot;,
                    &quot;name&quot;: &quot;Veniam&quot;,
                    &quot;slug&quot;: &quot;veniam&quot;,
                    &quot;color&quot;: &quot;#4f7d6b&quot;,
                    &quot;description&quot;: &quot;Rerum occaecati et ea libero numquam.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/veniam&quot;
                },
                {
                    &quot;id&quot;: &quot;43ba10c5-f16a-3530-a69e-b77f9d32ec91&quot;,
                    &quot;name&quot;: &quot;Excepturi&quot;,
                    &quot;slug&quot;: &quot;excepturi&quot;,
                    &quot;color&quot;: &quot;#de329b&quot;,
                    &quot;description&quot;: &quot;Praesentium excepturi animi doloremque dolores accusamus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/excepturi&quot;
                },
                {
                    &quot;id&quot;: &quot;e4175f2d-cf9a-3d8c-8bad-1051fa2d7e1f&quot;,
                    &quot;name&quot;: &quot;Eligendi&quot;,
                    &quot;slug&quot;: &quot;eligendi&quot;,
                    &quot;color&quot;: &quot;#8fb95f&quot;,
                    &quot;description&quot;: &quot;Veritatis dolor ut consectetur omnis recusandae.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/eligendi&quot;
                },
                {
                    &quot;id&quot;: &quot;6e054f7e-dca7-362a-bebb-ce586c4f93eb&quot;,
                    &quot;name&quot;: &quot;Enim&quot;,
                    &quot;slug&quot;: &quot;enim&quot;,
                    &quot;color&quot;: &quot;#315c7e&quot;,
                    &quot;description&quot;: &quot;Est quaerat sapiente tenetur dolor.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/enim&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/illo-qui-amet-suscipit-ratione-blanditiis-facilis-itaque&quot;
        },
        {
            &quot;id&quot;: &quot;3a693cbb-4f34-3261-b07c-e04096e0051e&quot;,
            &quot;title&quot;: &quot;Occaecati et labore facere qui.&quot;,
            &quot;slug&quot;: &quot;occaecati-et-labore-facere-qui&quot;,
            &quot;excerpt&quot;: &quot;Adipisci tempora enim velit a illo ducimus ullam. Dolor facere non facilis est hic est autem.&quot;,
            &quot;content&quot;: &quot;Vel qui in quis quam qui impedit maxime consequatur. Ut molestias ipsa similique molestias et. Nobis qui id eaque veritatis autem.\n\nAsperiores voluptate consequuntur deleniti sit maiores enim tempora. Molestiae veniam dignissimos qui eius. Ea dolor tempore aut provident quasi.\n\nPerspiciatis debitis quis et deserunt in sed. Voluptates perspiciatis laudantium et ducimus illum ea. In mollitia laudantium molestias omnis quis aliquam. Aut quae excepturi est nulla sapiente magni.\n\nCulpa nihil quaerat commodi eos. Enim aut fuga voluptatibus aut incidunt itaque. Ex inventore dignissimos quod doloribus.\n\nNumquam hic quisquam sequi qui odio voluptatibus est ut. Dolorum quam aut ut. Ut et voluptas quo maxime. Porro quia possimus officiis dolore cum veritatis natus.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/005555?text=nature+temporibus&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;c68fc6a3-7038-3bc1-8172-b587648b4577&quot;,
                &quot;name&quot;: &quot;Miss America Senger III&quot;,
                &quot;email&quot;: &quot;rbednar@example.com&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;b4a3f55e-64ae-3784-aab0-db987c96dcda&quot;,
                    &quot;name&quot;: &quot;Tempore&quot;,
                    &quot;slug&quot;: &quot;tempore&quot;,
                    &quot;color&quot;: &quot;#c15bef&quot;,
                    &quot;description&quot;: &quot;Officiis quia aut est et nihil.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/tempore&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/occaecati-et-labore-facere-qui&quot;
        },
        {
            &quot;id&quot;: &quot;411a979c-fcb2-3905-a6e8-847d13f5bc82&quot;,
            &quot;title&quot;: &quot;Ullam accusamus voluptates corrupti error.&quot;,
            &quot;slug&quot;: &quot;ullam-accusamus-voluptates-corrupti-error&quot;,
            &quot;excerpt&quot;: &quot;Voluptatibus pariatur sed ut. Non eum quod eligendi mollitia eos est omnis. Perferendis ipsam hic optio qui ut. Sit doloribus facere et eius.&quot;,
            &quot;content&quot;: &quot;Ullam et eius earum minus quia ut similique. Ea voluptatibus aliquid similique voluptas harum qui. Sit non vel rerum reiciendis quia. Eius et nesciunt fugit voluptatem.\n\nIllo qui in totam et. Suscipit ea est provident dolor. Quis ducimus asperiores voluptates dolorem consequuntur cumque eos.\n\nEt assumenda aperiam nihil laudantium optio eum tempore. Quibusdam animi sed nobis ad. Consectetur explicabo corrupti sed nemo fugiat velit omnis.\n\nVoluptatibus autem qui sed fugiat voluptatibus omnis commodi adipisci. Quidem distinctio assumenda harum unde dolorum. Animi facere qui perferendis voluptatem doloribus vel est.\n\nRem veniam accusantium ad delectus expedita sed. Beatae ut pariatur dignissimos omnis. Sint dolorum illo quam sit voluptatem. Aut similique dolor tempore quod.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/0044bb?text=nature+ab&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;acf0a2eb-2b60-3c7d-ad16-56eeb1734cb8&quot;,
                &quot;name&quot;: &quot;Iva Kohler&quot;,
                &quot;email&quot;: &quot;rklocko@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;d8da09a8-9301-3c0d-b1a3-dd41a7c09242&quot;,
                    &quot;name&quot;: &quot;Fugiat&quot;,
                    &quot;slug&quot;: &quot;fugiat&quot;,
                    &quot;color&quot;: &quot;#f02ffe&quot;,
                    &quot;description&quot;: &quot;Nihil aperiam a dolorem vel perferendis distinctio adipisci.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/fugiat&quot;
                },
                {
                    &quot;id&quot;: &quot;a623ce4b-b432-3f9f-80b6-e9c237e7cefc&quot;,
                    &quot;name&quot;: &quot;Veniam&quot;,
                    &quot;slug&quot;: &quot;veniam&quot;,
                    &quot;color&quot;: &quot;#4f7d6b&quot;,
                    &quot;description&quot;: &quot;Rerum occaecati et ea libero numquam.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/veniam&quot;
                },
                {
                    &quot;id&quot;: &quot;43ba10c5-f16a-3530-a69e-b77f9d32ec91&quot;,
                    &quot;name&quot;: &quot;Excepturi&quot;,
                    &quot;slug&quot;: &quot;excepturi&quot;,
                    &quot;color&quot;: &quot;#de329b&quot;,
                    &quot;description&quot;: &quot;Praesentium excepturi animi doloremque dolores accusamus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/excepturi&quot;
                },
                {
                    &quot;id&quot;: &quot;f4c81e8a-b6c3-35e4-8c68-52e8fb06a9a6&quot;,
                    &quot;name&quot;: &quot;Id&quot;,
                    &quot;slug&quot;: &quot;id&quot;,
                    &quot;color&quot;: &quot;#9b4208&quot;,
                    &quot;description&quot;: &quot;Ex et soluta fugiat vel et.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/id&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/ullam-accusamus-voluptates-corrupti-error&quot;
        },
        {
            &quot;id&quot;: &quot;4ddae3fc-02de-3233-9d63-1d5a97192064&quot;,
            &quot;title&quot;: &quot;Molestiae at corporis temporibus animi exercitationem porro et est.&quot;,
            &quot;slug&quot;: &quot;molestiae-at-corporis-temporibus-animi-exercitationem-porro-et-est&quot;,
            &quot;excerpt&quot;: &quot;Possimus ipsum laboriosam omnis. Autem repellat ipsa natus. Repudiandae dolore perferendis enim doloribus harum est. Explicabo sit hic qui nihil ea.&quot;,
            &quot;content&quot;: &quot;Neque non consequatur quia et voluptatem natus excepturi. Aut deleniti atque hic et magnam nihil optio. Non libero modi sed ex recusandae at voluptatibus. Itaque doloribus rerum minima aut aperiam voluptas alias.\n\nSint doloremque quo magni exercitationem odit. Laborum dolores sint exercitationem assumenda. Doloremque quidem quia unde omnis error. Aliquam et porro sit aut corrupti placeat.\n\nAt doloremque itaque libero ea nobis et aut. Dicta voluptas quia inventore quisquam provident animi ab. Beatae molestias quibusdam cumque officia quibusdam.\n\nId illum est delectus odio corporis consequuntur. Nulla dolor nesciunt quam eos. Non hic facere sunt.\n\nVoluptas labore sapiente quos in voluptatibus animi doloribus. Ut rerum numquam voluptate. Dignissimos non veritatis ut ipsam et adipisci id magni.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/0077aa?text=nature+eius&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;003f29af-9b36-3c00-8b3f-c87cbee18790&quot;,
                &quot;name&quot;: &quot;Demond Volkman DVM&quot;,
                &quot;email&quot;: &quot;tswift@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;ad8304ce-1537-39c5-b50e-db3eb33a2dc9&quot;,
                    &quot;name&quot;: &quot;Accusantium&quot;,
                    &quot;slug&quot;: &quot;accusantium&quot;,
                    &quot;color&quot;: &quot;#9d8461&quot;,
                    &quot;description&quot;: &quot;Reprehenderit doloribus odit et quasi.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/accusantium&quot;
                },
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                },
                {
                    &quot;id&quot;: &quot;e4175f2d-cf9a-3d8c-8bad-1051fa2d7e1f&quot;,
                    &quot;name&quot;: &quot;Eligendi&quot;,
                    &quot;slug&quot;: &quot;eligendi&quot;,
                    &quot;color&quot;: &quot;#8fb95f&quot;,
                    &quot;description&quot;: &quot;Veritatis dolor ut consectetur omnis recusandae.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/eligendi&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/molestiae-at-corporis-temporibus-animi-exercitationem-porro-et-est&quot;
        },
        {
            &quot;id&quot;: &quot;9ffc5d6e-6a05-3a22-afad-3dba2d226ea6&quot;,
            &quot;title&quot;: &quot;Qui eum reiciendis repellat illo error eum.&quot;,
            &quot;slug&quot;: &quot;qui-eum-reiciendis-repellat-illo-error-eum&quot;,
            &quot;excerpt&quot;: &quot;Ea incidunt dicta dolorem voluptate. Dicta voluptas nihil sunt odio corrupti. Et quam ex sed quibusdam ullam non praesentium quia.&quot;,
            &quot;content&quot;: &quot;Quae suscipit aut est suscipit rerum sunt. Odit eligendi sunt perspiciatis repellendus dolorem deserunt rerum modi. Vitae velit voluptatibus a aut dolorem molestiae. Nulla aperiam quia eius est.\n\nAspernatur ex ad omnis beatae qui. Qui illum delectus modi numquam iure qui. Vitae ut vero est sit ut. Incidunt accusantium explicabo quis qui et ut ut.\n\nSoluta repellendus aspernatur qui dicta doloremque. Omnis in architecto voluptas qui. Enim repellendus voluptatem ipsam. Dolorem et iusto enim architecto voluptatibus omnis sunt.\n\nIste voluptas ut amet consequatur neque. Dolorem voluptatum ratione quia molestias quos autem provident. Voluptas laboriosam voluptatem ipsam voluptas ut aut. Voluptas aut explicabo doloremque quas velit perspiciatis.\n\nPerspiciatis nesciunt ullam rerum nemo qui autem. Eum et molestiae tempora aut voluptatem possimus. Atque consequuntur excepturi officia magni quam. Ex et impedit sunt asperiores at harum voluptas.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00ff00?text=nature+ea&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;003f29af-9b36-3c00-8b3f-c87cbee18790&quot;,
                &quot;name&quot;: &quot;Demond Volkman DVM&quot;,
                &quot;email&quot;: &quot;tswift@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;ad8304ce-1537-39c5-b50e-db3eb33a2dc9&quot;,
                    &quot;name&quot;: &quot;Accusantium&quot;,
                    &quot;slug&quot;: &quot;accusantium&quot;,
                    &quot;color&quot;: &quot;#9d8461&quot;,
                    &quot;description&quot;: &quot;Reprehenderit doloribus odit et quasi.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/accusantium&quot;
                },
                {
                    &quot;id&quot;: &quot;afec48e9-16a0-3547-918f-4040c1b3bf6d&quot;,
                    &quot;name&quot;: &quot;Omnis&quot;,
                    &quot;slug&quot;: &quot;omnis&quot;,
                    &quot;color&quot;: &quot;#ec3252&quot;,
                    &quot;description&quot;: &quot;Magnam vitae occaecati quasi laudantium quia esse.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/omnis&quot;
                },
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                },
                {
                    &quot;id&quot;: &quot;e4175f2d-cf9a-3d8c-8bad-1051fa2d7e1f&quot;,
                    &quot;name&quot;: &quot;Eligendi&quot;,
                    &quot;slug&quot;: &quot;eligendi&quot;,
                    &quot;color&quot;: &quot;#8fb95f&quot;,
                    &quot;description&quot;: &quot;Veritatis dolor ut consectetur omnis recusandae.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/eligendi&quot;
                },
                {
                    &quot;id&quot;: &quot;6e054f7e-dca7-362a-bebb-ce586c4f93eb&quot;,
                    &quot;name&quot;: &quot;Enim&quot;,
                    &quot;slug&quot;: &quot;enim&quot;,
                    &quot;color&quot;: &quot;#315c7e&quot;,
                    &quot;description&quot;: &quot;Est quaerat sapiente tenetur dolor.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/enim&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/qui-eum-reiciendis-repellat-illo-error-eum&quot;
        },
        {
            &quot;id&quot;: &quot;50d61e2b-2158-3d0c-99df-7733d1a451d3&quot;,
            &quot;title&quot;: &quot;Porro corporis iure possimus quia cum vitae.&quot;,
            &quot;slug&quot;: &quot;porro-corporis-iure-possimus-quia-cum-vitae&quot;,
            &quot;excerpt&quot;: &quot;Cupiditate rem asperiores eos amet dolore quia voluptatem quos. Nisi est sapiente eius.&quot;,
            &quot;content&quot;: &quot;Neque magnam molestiae ullam itaque magni ullam natus est. Corrupti rerum voluptatem optio eos. Illo voluptas quaerat quod quam blanditiis sunt.\n\nOdio in itaque saepe. Quia architecto fuga ad ut eos architecto voluptatem. Est ut est quaerat possimus labore. Et est dolorem a asperiores.\n\nUnde labore molestias sed sed et qui accusamus. Et suscipit iusto ex voluptatem itaque quae eius odit. Accusamus recusandae ratione voluptatem. Eius quia ut et et consequatur velit tenetur.\n\nDistinctio tempore corrupti hic repudiandae et eaque. Vero numquam est dolorem qui explicabo reiciendis perspiciatis cumque. Consequatur accusantium exercitationem ullam et voluptatem iure. Eveniet labore tenetur accusantium ea rem.\n\nEa voluptas nam odit iusto quo et modi et. Sit quis aut provident pariatur ipsa adipisci. Modi earum omnis quia sit neque voluptas. Animi repellat voluptatem ipsam vitae saepe inventore.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00dd66?text=nature+qui&quot;,
            &quot;status&quot;: &quot;published&quot;,
            &quot;published_at&quot;: &quot;2025-05-13T04:18:54.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;498129f8-f403-3640-9a7c-14b9ddb75344&quot;,
                &quot;name&quot;: &quot;Mrs. Therese Huels&quot;,
                &quot;email&quot;: &quot;crooks.lavon@example.com&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;c072cb21-772f-349d-9065-009a360a580d&quot;,
                    &quot;name&quot;: &quot;Recusandae&quot;,
                    &quot;slug&quot;: &quot;recusandae&quot;,
                    &quot;color&quot;: &quot;#26f4b1&quot;,
                    &quot;description&quot;: &quot;Perferendis tempore molestias id non et.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/recusandae&quot;
                },
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/porro-corporis-iure-possimus-quia-cum-vitae&quot;
        },
        {
            &quot;id&quot;: &quot;2d793be4-3d27-3cd1-ae84-634bc1b64755&quot;,
            &quot;title&quot;: &quot;Quibusdam aut vel id mollitia.&quot;,
            &quot;slug&quot;: &quot;quibusdam-aut-vel-id-mollitia&quot;,
            &quot;excerpt&quot;: &quot;Mollitia magnam sit officiis magnam. Molestiae cumque ea quia sint enim voluptates accusantium repellat. Enim sed laudantium illum possimus velit.&quot;,
            &quot;content&quot;: &quot;Consequatur vero ut non sunt sint voluptate. Ut nihil consectetur veritatis et enim culpa. Est rerum atque tenetur dolor. Sit illo aut est qui commodi itaque aut.\n\nCulpa iure rerum aperiam. Quo enim et aut. Enim eveniet cumque sunt sequi earum vel rem non.\n\nExplicabo veritatis nihil quia dolor itaque. Fugiat non est fugiat quia. Nostrum quia qui et et labore praesentium.\n\nNihil reprehenderit corrupti quidem provident harum corrupti. Quam fugit eligendi quibusdam voluptas omnis. Provident quia veniam sit. Nulla reprehenderit quaerat eos et error. Illo eos esse quam voluptate id.\n\nUt qui laborum sint officiis suscipit veniam. Eius quaerat nostrum ut magnam voluptates. Corporis dolor omnis vel consectetur sit qui vitae possimus.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00aa99?text=nature+beatae&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;e488c5ce-3868-3952-8100-6877daef7e42&quot;,
                &quot;name&quot;: &quot;Reva Franecki V&quot;,
                &quot;email&quot;: &quot;jeff76@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;975e3e35-d1d4-3f38-9cf4-c83edc4daf73&quot;,
                    &quot;name&quot;: &quot;Laudantium&quot;,
                    &quot;slug&quot;: &quot;laudantium&quot;,
                    &quot;color&quot;: &quot;#5f00f2&quot;,
                    &quot;description&quot;: &quot;Neque voluptatem quia et excepturi consectetur voluptatem.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/laudantium&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/quibusdam-aut-vel-id-mollitia&quot;
        },
        {
            &quot;id&quot;: &quot;7b2f7231-0ca7-38ff-bf9c-3f68f43a9731&quot;,
            &quot;title&quot;: &quot;Nihil ratione fugit ipsam distinctio quos ut.&quot;,
            &quot;slug&quot;: &quot;nihil-ratione-fugit-ipsam-distinctio-quos-ut&quot;,
            &quot;excerpt&quot;: &quot;Et nulla inventore facilis. Quod pariatur voluptate quis recusandae placeat voluptates dolore. Eaque vel hic temporibus maiores sed qui.&quot;,
            &quot;content&quot;: &quot;Beatae accusamus mollitia repellat atque dolorem eum cupiditate cumque. Nihil dicta laboriosam optio molestiae molestias quam ex. Eos aperiam earum itaque ea expedita qui iure.\n\nPerspiciatis laudantium vero sit distinctio odit voluptas sed nihil. Consequuntur reprehenderit quo enim ipsam non provident laudantium. Id soluta autem quas magni nobis nemo aut.\n\nReiciendis earum aut fugit enim quia. Id qui reiciendis voluptas rem. Ea nobis rerum amet.\n\nLibero eos rerum sit quae. Aut molestiae deserunt ipsa laudantium consequatur nihil. Sunt voluptatibus quaerat reiciendis quaerat fugit. Ut quis consequatur consequatur a. Saepe tempora aut modi quo et.\n\nMinima facilis doloribus corporis alias. Unde et error aliquam minima est accusantium. Sapiente est doloribus eum quos qui. Delectus rerum sit harum velit architecto tempora ea. Itaque eius nisi sequi asperiores placeat modi.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00ffbb?text=nature+est&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;379a13b5-86df-3917-8478-071d9e6a4ef0&quot;,
                &quot;name&quot;: &quot;Arno Parker&quot;,
                &quot;email&quot;: &quot;stewart76@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/nihil-ratione-fugit-ipsam-distinctio-quos-ut&quot;
        },
        {
            &quot;id&quot;: &quot;9b15bcd0-a4c8-355d-b2a5-c82f6c79997c&quot;,
            &quot;title&quot;: &quot;Qui cumque est tempora quis modi sed qui.&quot;,
            &quot;slug&quot;: &quot;qui-cumque-est-tempora-quis-modi-sed-qui&quot;,
            &quot;excerpt&quot;: &quot;Voluptas ratione nesciunt debitis dolorem. Sapiente perferendis vitae eaque. Enim modi animi praesentium est voluptatibus.&quot;,
            &quot;content&quot;: &quot;Eaque voluptatem eligendi voluptates qui. Repudiandae dolorum quaerat facere repellendus aliquam voluptatum velit. Qui eligendi eum voluptate iusto quis. Assumenda et alias omnis rerum hic ratione.\n\nSint illo itaque qui minima quo. Qui sit commodi ab voluptatem doloribus facere. Quasi dolor aliquam enim.\n\nNostrum atque exercitationem fugit tempore. Sit officia sint esse eveniet ea.\n\nEnim cum rerum voluptatum eaque. Cupiditate debitis vel quis iusto repudiandae. Ipsam nesciunt veniam quia temporibus quia consequatur. Illum esse nulla itaque quia ex expedita.\n\nIusto eum voluptatem deserunt quia nam. Tempore quis nisi quia explicabo magni et nesciunt. Quia laboriosam et itaque quia quibusdam consequatur sint et. Quidem commodi provident modi fuga.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00ffff?text=nature+ut&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;003f29af-9b36-3c00-8b3f-c87cbee18790&quot;,
                &quot;name&quot;: &quot;Demond Volkman DVM&quot;,
                &quot;email&quot;: &quot;tswift@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;360838b9-3625-326f-84aa-2a324db8ebca&quot;,
                    &quot;name&quot;: &quot;Est&quot;,
                    &quot;slug&quot;: &quot;est&quot;,
                    &quot;color&quot;: &quot;#e2073b&quot;,
                    &quot;description&quot;: &quot;Et cupiditate blanditiis sed iusto quo distinctio nobis et.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/est&quot;
                },
                {
                    &quot;id&quot;: &quot;c072cb21-772f-349d-9065-009a360a580d&quot;,
                    &quot;name&quot;: &quot;Recusandae&quot;,
                    &quot;slug&quot;: &quot;recusandae&quot;,
                    &quot;color&quot;: &quot;#26f4b1&quot;,
                    &quot;description&quot;: &quot;Perferendis tempore molestias id non et.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/recusandae&quot;
                },
                {
                    &quot;id&quot;: &quot;c65d0c93-63e0-3b28-8de3-323965348314&quot;,
                    &quot;name&quot;: &quot;Ad&quot;,
                    &quot;slug&quot;: &quot;ad&quot;,
                    &quot;color&quot;: &quot;#55bfa7&quot;,
                    &quot;description&quot;: &quot;Et corrupti impedit repellat doloribus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ad&quot;
                },
                {
                    &quot;id&quot;: &quot;d8da09a8-9301-3c0d-b1a3-dd41a7c09242&quot;,
                    &quot;name&quot;: &quot;Fugiat&quot;,
                    &quot;slug&quot;: &quot;fugiat&quot;,
                    &quot;color&quot;: &quot;#f02ffe&quot;,
                    &quot;description&quot;: &quot;Nihil aperiam a dolorem vel perferendis distinctio adipisci.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/fugiat&quot;
                },
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/qui-cumque-est-tempora-quis-modi-sed-qui&quot;
        },
        {
            &quot;id&quot;: &quot;9d96ebe5-dc25-3759-b33e-2ba030c197b0&quot;,
            &quot;title&quot;: &quot;Consequatur dolores et iusto et.&quot;,
            &quot;slug&quot;: &quot;consequatur-dolores-et-iusto-et&quot;,
            &quot;excerpt&quot;: &quot;Ducimus quisquam quisquam et error. Nulla quod veritatis et ea est atque. Vitae illum sit et sed.&quot;,
            &quot;content&quot;: &quot;Quia est id enim natus. Consequatur accusamus atque qui culpa recusandae quidem suscipit. Aliquid provident vero qui rerum. Dolorem dolorem nulla dolore et iste voluptates.\n\nUllam facere expedita deserunt modi et nisi. Nihil ipsum asperiores repudiandae suscipit aut laudantium et. Itaque et reprehenderit sunt sed dolor vitae. Sint velit illo magni eos ut aut facilis. Vitae aperiam dicta sint ut.\n\nEst eligendi aliquam aperiam fugit corporis. Quos autem aperiam consequuntur ratione consequatur sunt. Dolores doloribus repellendus soluta aliquam quam hic quae.\n\nIpsa ipsa autem et a atque aperiam dolor. Ullam velit aut doloribus ut non dignissimos.\n\nEt aut dolores est aut non modi. Doloremque officiis dolor rerum quidem.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/0066ee?text=nature+vero&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;08d46035-6ddb-3afa-af74-dd51d5771ea5&quot;,
                &quot;name&quot;: &quot;Prof. Ricardo Mitchell V&quot;,
                &quot;email&quot;: &quot;hilma66@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:09.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;360838b9-3625-326f-84aa-2a324db8ebca&quot;,
                    &quot;name&quot;: &quot;Est&quot;,
                    &quot;slug&quot;: &quot;est&quot;,
                    &quot;color&quot;: &quot;#e2073b&quot;,
                    &quot;description&quot;: &quot;Et cupiditate blanditiis sed iusto quo distinctio nobis et.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/est&quot;
                },
                {
                    &quot;id&quot;: &quot;975e3e35-d1d4-3f38-9cf4-c83edc4daf73&quot;,
                    &quot;name&quot;: &quot;Laudantium&quot;,
                    &quot;slug&quot;: &quot;laudantium&quot;,
                    &quot;color&quot;: &quot;#5f00f2&quot;,
                    &quot;description&quot;: &quot;Neque voluptatem quia et excepturi consectetur voluptatem.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/laudantium&quot;
                },
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                },
                {
                    &quot;id&quot;: &quot;6e054f7e-dca7-362a-bebb-ce586c4f93eb&quot;,
                    &quot;name&quot;: &quot;Enim&quot;,
                    &quot;slug&quot;: &quot;enim&quot;,
                    &quot;color&quot;: &quot;#315c7e&quot;,
                    &quot;description&quot;: &quot;Est quaerat sapiente tenetur dolor.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/enim&quot;
                },
                {
                    &quot;id&quot;: &quot;b4a3f55e-64ae-3784-aab0-db987c96dcda&quot;,
                    &quot;name&quot;: &quot;Tempore&quot;,
                    &quot;slug&quot;: &quot;tempore&quot;,
                    &quot;color&quot;: &quot;#c15bef&quot;,
                    &quot;description&quot;: &quot;Officiis quia aut est et nihil.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/tempore&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/consequatur-dolores-et-iusto-et&quot;
        },
        {
            &quot;id&quot;: &quot;8e994973-93a9-3314-a6a5-68c5567920fb&quot;,
            &quot;title&quot;: &quot;At rerum deserunt quae dolor.&quot;,
            &quot;slug&quot;: &quot;at-rerum-deserunt-quae-dolor&quot;,
            &quot;excerpt&quot;: &quot;Fugit alias et eveniet aut. Ipsum impedit impedit perferendis ullam facere minus. Consequatur nam qui nisi id non eos. Magnam nihil culpa ut ut.&quot;,
            &quot;content&quot;: &quot;Officiis culpa dolorum ab ut distinctio officia. Consequatur laboriosam repudiandae dolorum minima saepe adipisci. Hic fugiat veritatis ipsa amet nisi. Et omnis sed non sint ipsa asperiores quos.\n\nReiciendis deleniti libero qui recusandae earum in et. Rerum qui accusantium minima dolores sit deserunt placeat expedita. Sint facilis eum architecto et et odio excepturi.\n\nId velit neque ut nihil aspernatur id. Sit rerum voluptatum sint fugit aut modi maiores. Repellendus recusandae esse nemo tempore cupiditate. Dolorem quaerat quae repudiandae aut amet.\n\nEt molestiae atque laboriosam suscipit earum. Non sunt quisquam mollitia nihil. Iste aut vero architecto tenetur sunt vero.\n\nQuo occaecati ab quidem expedita blanditiis optio. Ut illum sed dolores aliquam.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/009966?text=nature+assumenda&quot;,
            &quot;status&quot;: &quot;published&quot;,
            &quot;published_at&quot;: &quot;2024-08-05T12:31:13.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;c2bd5225-fd12-333f-bf02-22251cd5ba1f&quot;,
                &quot;name&quot;: &quot;Ardella Waelchi&quot;,
                &quot;email&quot;: &quot;hannah27@example.org&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;7fe90e0f-4ca7-33ff-a2b0-2ab285682df6&quot;,
                    &quot;name&quot;: &quot;Nesciunt&quot;,
                    &quot;slug&quot;: &quot;nesciunt&quot;,
                    &quot;color&quot;: &quot;#643d6a&quot;,
                    &quot;description&quot;: &quot;Dolore voluptate et non saepe iste dolorem doloremque.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/nesciunt&quot;
                },
                {
                    &quot;id&quot;: &quot;360838b9-3625-326f-84aa-2a324db8ebca&quot;,
                    &quot;name&quot;: &quot;Est&quot;,
                    &quot;slug&quot;: &quot;est&quot;,
                    &quot;color&quot;: &quot;#e2073b&quot;,
                    &quot;description&quot;: &quot;Et cupiditate blanditiis sed iusto quo distinctio nobis et.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/est&quot;
                },
                {
                    &quot;id&quot;: &quot;43ba10c5-f16a-3530-a69e-b77f9d32ec91&quot;,
                    &quot;name&quot;: &quot;Excepturi&quot;,
                    &quot;slug&quot;: &quot;excepturi&quot;,
                    &quot;color&quot;: &quot;#de329b&quot;,
                    &quot;description&quot;: &quot;Praesentium excepturi animi doloremque dolores accusamus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/excepturi&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/at-rerum-deserunt-quae-dolor&quot;
        },
        {
            &quot;id&quot;: &quot;d37bb76e-de26-39b6-915e-8591915e5068&quot;,
            &quot;title&quot;: &quot;Consequatur nesciunt ut eum dolorem sit qui.&quot;,
            &quot;slug&quot;: &quot;consequatur-nesciunt-ut-eum-dolorem-sit-qui&quot;,
            &quot;excerpt&quot;: &quot;Deleniti sint eveniet ut alias natus laudantium quas. In ut vel dolores. Ipsum at incidunt aut aut quam.&quot;,
            &quot;content&quot;: &quot;Iusto sunt illo perferendis accusantium. Quod sed omnis et eveniet ut. Unde aut excepturi placeat.\n\nMinus ipsa impedit omnis quasi. Et omnis possimus corporis voluptatem ut libero fuga et. Veniam saepe natus voluptate nihil expedita est. Nulla quo molestiae velit deserunt repellendus.\n\nAut occaecati et laboriosam molestiae voluptas omnis. Hic quos placeat distinctio in esse hic et. Harum quas quae architecto dolorem commodi. Molestiae quas accusantium ea ducimus.\n\nFugit odit possimus doloremque voluptatum voluptatem nisi saepe recusandae. Et ea mollitia enim cum ut. Consequatur quia voluptatem a sed.\n\nAutem earum similique veritatis necessitatibus quis soluta. Qui illum sit non quibusdam. Odio laboriosam ad placeat veritatis sit provident odio minima.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00aaee?text=nature+sunt&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;379a13b5-86df-3917-8478-071d9e6a4ef0&quot;,
                &quot;name&quot;: &quot;Arno Parker&quot;,
                &quot;email&quot;: &quot;stewart76@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;7fe90e0f-4ca7-33ff-a2b0-2ab285682df6&quot;,
                    &quot;name&quot;: &quot;Nesciunt&quot;,
                    &quot;slug&quot;: &quot;nesciunt&quot;,
                    &quot;color&quot;: &quot;#643d6a&quot;,
                    &quot;description&quot;: &quot;Dolore voluptate et non saepe iste dolorem doloremque.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/nesciunt&quot;
                },
                {
                    &quot;id&quot;: &quot;ad8304ce-1537-39c5-b50e-db3eb33a2dc9&quot;,
                    &quot;name&quot;: &quot;Accusantium&quot;,
                    &quot;slug&quot;: &quot;accusantium&quot;,
                    &quot;color&quot;: &quot;#9d8461&quot;,
                    &quot;description&quot;: &quot;Reprehenderit doloribus odit et quasi.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/accusantium&quot;
                },
                {
                    &quot;id&quot;: &quot;c65d0c93-63e0-3b28-8de3-323965348314&quot;,
                    &quot;name&quot;: &quot;Ad&quot;,
                    &quot;slug&quot;: &quot;ad&quot;,
                    &quot;color&quot;: &quot;#55bfa7&quot;,
                    &quot;description&quot;: &quot;Et corrupti impedit repellat doloribus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ad&quot;
                },
                {
                    &quot;id&quot;: &quot;9803d4ae-51ef-3c77-bc68-97cb1cea5353&quot;,
                    &quot;name&quot;: &quot;Cupiditate&quot;,
                    &quot;slug&quot;: &quot;cupiditate&quot;,
                    &quot;color&quot;: &quot;#630e57&quot;,
                    &quot;description&quot;: &quot;Excepturi animi fugiat perferendis aut voluptatum distinctio ratione.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/cupiditate&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/consequatur-nesciunt-ut-eum-dolorem-sit-qui&quot;
        },
        {
            &quot;id&quot;: &quot;a39562e1-3209-3b90-a603-3e37578a3d69&quot;,
            &quot;title&quot;: &quot;Perferendis sint nesciunt voluptatibus aut sunt.&quot;,
            &quot;slug&quot;: &quot;perferendis-sint-nesciunt-voluptatibus-aut-sunt&quot;,
            &quot;excerpt&quot;: &quot;Dolor placeat excepturi quis. Unde quo laborum qui ut eos. Deserunt ipsum ab repellendus est commodi pariatur.&quot;,
            &quot;content&quot;: &quot;Explicabo asperiores aut optio voluptatem. Dicta totam vitae impedit ut architecto. Illum natus dolor est nihil et odio.\n\nVitae accusantium nemo rerum recusandae cum sed quos. Dignissimos eveniet tempore cupiditate ipsa. Vel voluptatem totam harum magnam velit amet. Molestias earum provident repellendus corporis dolorem reprehenderit ipsum modi.\n\nIpsum libero labore sit voluptatum beatae asperiores. Sapiente itaque aut ut est eligendi.\n\nCommodi sequi quasi dolorum harum atque aut. Quam ullam sed voluptatum eaque.\n\nMinus reprehenderit impedit consequatur necessitatibus esse nisi sunt unde. Eveniet distinctio molestiae enim. Sunt in voluptatem ullam numquam natus error. Qui culpa rerum saepe voluptas omnis.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00eeaa?text=nature+consequatur&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;379a13b5-86df-3917-8478-071d9e6a4ef0&quot;,
                &quot;name&quot;: &quot;Arno Parker&quot;,
                &quot;email&quot;: &quot;stewart76@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;d62fb390-ceba-357d-89a9-bbe0fb2e31f5&quot;,
                    &quot;name&quot;: &quot;Dolor&quot;,
                    &quot;slug&quot;: &quot;dolor&quot;,
                    &quot;color&quot;: &quot;#481fc9&quot;,
                    &quot;description&quot;: &quot;Excepturi aperiam consequatur numquam iure libero voluptatibus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/dolor&quot;
                },
                {
                    &quot;id&quot;: &quot;afec48e9-16a0-3547-918f-4040c1b3bf6d&quot;,
                    &quot;name&quot;: &quot;Omnis&quot;,
                    &quot;slug&quot;: &quot;omnis&quot;,
                    &quot;color&quot;: &quot;#ec3252&quot;,
                    &quot;description&quot;: &quot;Magnam vitae occaecati quasi laudantium quia esse.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/omnis&quot;
                },
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/perferendis-sint-nesciunt-voluptatibus-aut-sunt&quot;
        },
        {
            &quot;id&quot;: &quot;4e88f2d9-c935-31ab-bb90-fdd2e54a5452&quot;,
            &quot;title&quot;: &quot;Adipisci facilis aperiam hic minima eligendi mollitia.&quot;,
            &quot;slug&quot;: &quot;adipisci-facilis-aperiam-hic-minima-eligendi-mollitia&quot;,
            &quot;excerpt&quot;: &quot;Soluta ex libero dolorum distinctio modi autem dolorum voluptates. Quis velit ut reiciendis veniam. Ipsam modi iste sint distinctio.&quot;,
            &quot;content&quot;: &quot;Quis consequuntur maxime rem quasi voluptatem. In unde delectus aliquam dolore quia omnis. Beatae aut quia sed nemo ducimus architecto doloribus sed.\n\nPerferendis est doloribus fugiat qui voluptatem doloribus. Commodi explicabo est veniam aut sint voluptatibus. Fugiat voluptatibus nesciunt debitis laborum atque maxime. Autem ea nemo pariatur.\n\nUt consequatur repellendus nihil mollitia. Dolorum necessitatibus qui et molestias est eaque. Nulla et tempore autem et qui eaque occaecati. Eveniet tenetur et ipsam. Nam tempore sed ut saepe repellendus.\n\nVeritatis occaecati et blanditiis similique sunt. Esse iure libero qui dolorem et ut reiciendis enim. Eveniet ipsum enim est amet rem commodi. Nobis molestiae iure quod qui inventore vero.\n\nIn ipsa quidem neque maxime dolor quod fuga. Doloremque ut et ut numquam. Laudantium ut ut et reprehenderit id voluptas sed. Accusantium sit atque numquam cupiditate ut.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00ffaa?text=nature+voluptates&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;acf0a2eb-2b60-3c7d-ad16-56eeb1734cb8&quot;,
                &quot;name&quot;: &quot;Iva Kohler&quot;,
                &quot;email&quot;: &quot;rklocko@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;a623ce4b-b432-3f9f-80b6-e9c237e7cefc&quot;,
                    &quot;name&quot;: &quot;Veniam&quot;,
                    &quot;slug&quot;: &quot;veniam&quot;,
                    &quot;color&quot;: &quot;#4f7d6b&quot;,
                    &quot;description&quot;: &quot;Rerum occaecati et ea libero numquam.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/veniam&quot;
                },
                {
                    &quot;id&quot;: &quot;31d3cbe2-f754-3fd7-91a2-4f6f2f0aad4c&quot;,
                    &quot;name&quot;: &quot;Velit&quot;,
                    &quot;slug&quot;: &quot;velit&quot;,
                    &quot;color&quot;: &quot;#38b945&quot;,
                    &quot;description&quot;: &quot;Porro odit et ad adipisci eos reprehenderit voluptates.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/velit&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/adipisci-facilis-aperiam-hic-minima-eligendi-mollitia&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/posts?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/posts?page=4&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://localhost:8000/api/posts?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 4,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/posts?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/posts?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/posts?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/posts?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/posts?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/posts&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 50
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-posts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-posts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-posts" data-method="GET"
      data-path="api/posts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-posts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-posts"
                    onclick="tryItOut('GETapi-posts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-posts"
                    onclick="cancelTryOut('GETapi-posts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-posts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/posts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-posts--id-">GET api/posts/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-posts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-posts--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;4e88f2d9-c935-31ab-bb90-fdd2e54a5452&quot;,
        &quot;title&quot;: &quot;Adipisci facilis aperiam hic minima eligendi mollitia.&quot;,
        &quot;slug&quot;: &quot;adipisci-facilis-aperiam-hic-minima-eligendi-mollitia&quot;,
        &quot;excerpt&quot;: &quot;Soluta ex libero dolorum distinctio modi autem dolorum voluptates. Quis velit ut reiciendis veniam. Ipsam modi iste sint distinctio.&quot;,
        &quot;content&quot;: &quot;Quis consequuntur maxime rem quasi voluptatem. In unde delectus aliquam dolore quia omnis. Beatae aut quia sed nemo ducimus architecto doloribus sed.\n\nPerferendis est doloribus fugiat qui voluptatem doloribus. Commodi explicabo est veniam aut sint voluptatibus. Fugiat voluptatibus nesciunt debitis laborum atque maxime. Autem ea nemo pariatur.\n\nUt consequatur repellendus nihil mollitia. Dolorum necessitatibus qui et molestias est eaque. Nulla et tempore autem et qui eaque occaecati. Eveniet tenetur et ipsam. Nam tempore sed ut saepe repellendus.\n\nVeritatis occaecati et blanditiis similique sunt. Esse iure libero qui dolorem et ut reiciendis enim. Eveniet ipsum enim est amet rem commodi. Nobis molestiae iure quod qui inventore vero.\n\nIn ipsa quidem neque maxime dolor quod fuga. Doloremque ut et ut numquam. Laudantium ut ut et reprehenderit id voluptas sed. Accusantium sit atque numquam cupiditate ut.&quot;,
        &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00ffaa?text=nature+voluptates&quot;,
        &quot;status&quot;: &quot;draft&quot;,
        &quot;published_at&quot;: null,
        &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
        &quot;user&quot;: {
            &quot;id&quot;: &quot;acf0a2eb-2b60-3c7d-ad16-56eeb1734cb8&quot;,
            &quot;name&quot;: &quot;Iva Kohler&quot;,
            &quot;email&quot;: &quot;rklocko@example.net&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
        },
        &quot;tags&quot;: [
            {
                &quot;id&quot;: &quot;a623ce4b-b432-3f9f-80b6-e9c237e7cefc&quot;,
                &quot;name&quot;: &quot;Veniam&quot;,
                &quot;slug&quot;: &quot;veniam&quot;,
                &quot;color&quot;: &quot;#4f7d6b&quot;,
                &quot;description&quot;: &quot;Rerum occaecati et ea libero numquam.&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                &quot;url&quot;: &quot;http://localhost:8000/api/tags/veniam&quot;
            },
            {
                &quot;id&quot;: &quot;31d3cbe2-f754-3fd7-91a2-4f6f2f0aad4c&quot;,
                &quot;name&quot;: &quot;Velit&quot;,
                &quot;slug&quot;: &quot;velit&quot;,
                &quot;color&quot;: &quot;#38b945&quot;,
                &quot;description&quot;: &quot;Porro odit et ad adipisci eos reprehenderit voluptates.&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                &quot;url&quot;: &quot;http://localhost:8000/api/tags/velit&quot;
            }
        ],
        &quot;url&quot;: &quot;http://localhost:8000/api/posts/adipisci-facilis-aperiam-hic-minima-eligendi-mollitia&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-posts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-posts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-posts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-posts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-posts--id-" data-method="GET"
      data-path="api/posts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-posts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-posts--id-"
                    onclick="tryItOut('GETapi-posts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-posts--id-"
                    onclick="cancelTryOut('GETapi-posts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-posts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/posts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-posts--id-"
               value="4e88f2d9-c935-31ab-bb90-fdd2e54a5452"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>4e88f2d9-c935-31ab-bb90-fdd2e54a5452</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-tags">GET api/tags</h2>

<p>
</p>



<span id="example-requests-GETapi-tags">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tags" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tags"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tags">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;ad8304ce-1537-39c5-b50e-db3eb33a2dc9&quot;,
            &quot;name&quot;: &quot;Accusantium&quot;,
            &quot;slug&quot;: &quot;accusantium&quot;,
            &quot;color&quot;: &quot;#9d8461&quot;,
            &quot;description&quot;: &quot;Reprehenderit doloribus odit et quasi.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 10,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/accusantium&quot;
        },
        {
            &quot;id&quot;: &quot;c65d0c93-63e0-3b28-8de3-323965348314&quot;,
            &quot;name&quot;: &quot;Ad&quot;,
            &quot;slug&quot;: &quot;ad&quot;,
            &quot;color&quot;: &quot;#55bfa7&quot;,
            &quot;description&quot;: &quot;Et corrupti impedit repellat doloribus.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 9,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/ad&quot;
        },
        {
            &quot;id&quot;: &quot;9803d4ae-51ef-3c77-bc68-97cb1cea5353&quot;,
            &quot;name&quot;: &quot;Cupiditate&quot;,
            &quot;slug&quot;: &quot;cupiditate&quot;,
            &quot;color&quot;: &quot;#630e57&quot;,
            &quot;description&quot;: &quot;Excepturi animi fugiat perferendis aut voluptatum distinctio ratione.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 8,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/cupiditate&quot;
        },
        {
            &quot;id&quot;: &quot;d62fb390-ceba-357d-89a9-bbe0fb2e31f5&quot;,
            &quot;name&quot;: &quot;Dolor&quot;,
            &quot;slug&quot;: &quot;dolor&quot;,
            &quot;color&quot;: &quot;#481fc9&quot;,
            &quot;description&quot;: &quot;Excepturi aperiam consequatur numquam iure libero voluptatibus.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 6,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/dolor&quot;
        },
        {
            &quot;id&quot;: &quot;e4175f2d-cf9a-3d8c-8bad-1051fa2d7e1f&quot;,
            &quot;name&quot;: &quot;Eligendi&quot;,
            &quot;slug&quot;: &quot;eligendi&quot;,
            &quot;color&quot;: &quot;#8fb95f&quot;,
            &quot;description&quot;: &quot;Veritatis dolor ut consectetur omnis recusandae.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 8,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/eligendi&quot;
        },
        {
            &quot;id&quot;: &quot;6e054f7e-dca7-362a-bebb-ce586c4f93eb&quot;,
            &quot;name&quot;: &quot;Enim&quot;,
            &quot;slug&quot;: &quot;enim&quot;,
            &quot;color&quot;: &quot;#315c7e&quot;,
            &quot;description&quot;: &quot;Est quaerat sapiente tenetur dolor.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 6,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/enim&quot;
        },
        {
            &quot;id&quot;: &quot;360838b9-3625-326f-84aa-2a324db8ebca&quot;,
            &quot;name&quot;: &quot;Est&quot;,
            &quot;slug&quot;: &quot;est&quot;,
            &quot;color&quot;: &quot;#e2073b&quot;,
            &quot;description&quot;: &quot;Et cupiditate blanditiis sed iusto quo distinctio nobis et.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 6,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/est&quot;
        },
        {
            &quot;id&quot;: &quot;43ba10c5-f16a-3530-a69e-b77f9d32ec91&quot;,
            &quot;name&quot;: &quot;Excepturi&quot;,
            &quot;slug&quot;: &quot;excepturi&quot;,
            &quot;color&quot;: &quot;#de329b&quot;,
            &quot;description&quot;: &quot;Praesentium excepturi animi doloremque dolores accusamus.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 8,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/excepturi&quot;
        },
        {
            &quot;id&quot;: &quot;d8da09a8-9301-3c0d-b1a3-dd41a7c09242&quot;,
            &quot;name&quot;: &quot;Fugiat&quot;,
            &quot;slug&quot;: &quot;fugiat&quot;,
            &quot;color&quot;: &quot;#f02ffe&quot;,
            &quot;description&quot;: &quot;Nihil aperiam a dolorem vel perferendis distinctio adipisci.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 7,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/fugiat&quot;
        },
        {
            &quot;id&quot;: &quot;f4c81e8a-b6c3-35e4-8c68-52e8fb06a9a6&quot;,
            &quot;name&quot;: &quot;Id&quot;,
            &quot;slug&quot;: &quot;id&quot;,
            &quot;color&quot;: &quot;#9b4208&quot;,
            &quot;description&quot;: &quot;Ex et soluta fugiat vel et.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 7,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/id&quot;
        },
        {
            &quot;id&quot;: &quot;975e3e35-d1d4-3f38-9cf4-c83edc4daf73&quot;,
            &quot;name&quot;: &quot;Laudantium&quot;,
            &quot;slug&quot;: &quot;laudantium&quot;,
            &quot;color&quot;: &quot;#5f00f2&quot;,
            &quot;description&quot;: &quot;Neque voluptatem quia et excepturi consectetur voluptatem.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 6,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/laudantium&quot;
        },
        {
            &quot;id&quot;: &quot;7fe90e0f-4ca7-33ff-a2b0-2ab285682df6&quot;,
            &quot;name&quot;: &quot;Nesciunt&quot;,
            &quot;slug&quot;: &quot;nesciunt&quot;,
            &quot;color&quot;: &quot;#643d6a&quot;,
            &quot;description&quot;: &quot;Dolore voluptate et non saepe iste dolorem doloremque.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 5,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/nesciunt&quot;
        },
        {
            &quot;id&quot;: &quot;afec48e9-16a0-3547-918f-4040c1b3bf6d&quot;,
            &quot;name&quot;: &quot;Omnis&quot;,
            &quot;slug&quot;: &quot;omnis&quot;,
            &quot;color&quot;: &quot;#ec3252&quot;,
            &quot;description&quot;: &quot;Magnam vitae occaecati quasi laudantium quia esse.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 7,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/omnis&quot;
        },
        {
            &quot;id&quot;: &quot;c072cb21-772f-349d-9065-009a360a580d&quot;,
            &quot;name&quot;: &quot;Recusandae&quot;,
            &quot;slug&quot;: &quot;recusandae&quot;,
            &quot;color&quot;: &quot;#26f4b1&quot;,
            &quot;description&quot;: &quot;Perferendis tempore molestias id non et.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 6,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/recusandae&quot;
        },
        {
            &quot;id&quot;: &quot;3338b5a0-c679-3021-80da-a52e7cfa5ae5&quot;,
            &quot;name&quot;: &quot;Sit&quot;,
            &quot;slug&quot;: &quot;sit&quot;,
            &quot;color&quot;: &quot;#e86fa7&quot;,
            &quot;description&quot;: &quot;Eius laborum ipsa repellat ut ducimus.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 3,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/sit&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/tags?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/tags?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://localhost:8000/api/tags?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tags?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tags?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tags?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/tags&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 15,
        &quot;total&quot;: 20
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tags" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tags"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tags"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tags">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tags" data-method="GET"
      data-path="api/tags"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tags', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tags"
                    onclick="tryItOut('GETapi-tags');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tags"
                    onclick="cancelTryOut('GETapi-tags');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tags"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tags</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tags-popular">GET api/tags/popular</h2>

<p>
</p>



<span id="example-requests-GETapi-tags-popular">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tags/popular" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tags/popular"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tags-popular">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
            &quot;name&quot;: &quot;Soluta&quot;,
            &quot;slug&quot;: &quot;soluta&quot;,
            &quot;color&quot;: &quot;#fbd7f0&quot;,
            &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 15,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
        },
        {
            &quot;id&quot;: &quot;ad8304ce-1537-39c5-b50e-db3eb33a2dc9&quot;,
            &quot;name&quot;: &quot;Accusantium&quot;,
            &quot;slug&quot;: &quot;accusantium&quot;,
            &quot;color&quot;: &quot;#9d8461&quot;,
            &quot;description&quot;: &quot;Reprehenderit doloribus odit et quasi.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 10,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/accusantium&quot;
        },
        {
            &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
            &quot;name&quot;: &quot;Ut&quot;,
            &quot;slug&quot;: &quot;ut&quot;,
            &quot;color&quot;: &quot;#24d5a5&quot;,
            &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 9,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
        },
        {
            &quot;id&quot;: &quot;c65d0c93-63e0-3b28-8de3-323965348314&quot;,
            &quot;name&quot;: &quot;Ad&quot;,
            &quot;slug&quot;: &quot;ad&quot;,
            &quot;color&quot;: &quot;#55bfa7&quot;,
            &quot;description&quot;: &quot;Et corrupti impedit repellat doloribus.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 9,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/ad&quot;
        },
        {
            &quot;id&quot;: &quot;43ba10c5-f16a-3530-a69e-b77f9d32ec91&quot;,
            &quot;name&quot;: &quot;Excepturi&quot;,
            &quot;slug&quot;: &quot;excepturi&quot;,
            &quot;color&quot;: &quot;#de329b&quot;,
            &quot;description&quot;: &quot;Praesentium excepturi animi doloremque dolores accusamus.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 8,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/excepturi&quot;
        },
        {
            &quot;id&quot;: &quot;e4175f2d-cf9a-3d8c-8bad-1051fa2d7e1f&quot;,
            &quot;name&quot;: &quot;Eligendi&quot;,
            &quot;slug&quot;: &quot;eligendi&quot;,
            &quot;color&quot;: &quot;#8fb95f&quot;,
            &quot;description&quot;: &quot;Veritatis dolor ut consectetur omnis recusandae.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 8,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/eligendi&quot;
        },
        {
            &quot;id&quot;: &quot;9803d4ae-51ef-3c77-bc68-97cb1cea5353&quot;,
            &quot;name&quot;: &quot;Cupiditate&quot;,
            &quot;slug&quot;: &quot;cupiditate&quot;,
            &quot;color&quot;: &quot;#630e57&quot;,
            &quot;description&quot;: &quot;Excepturi animi fugiat perferendis aut voluptatum distinctio ratione.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 8,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/cupiditate&quot;
        },
        {
            &quot;id&quot;: &quot;f4c81e8a-b6c3-35e4-8c68-52e8fb06a9a6&quot;,
            &quot;name&quot;: &quot;Id&quot;,
            &quot;slug&quot;: &quot;id&quot;,
            &quot;color&quot;: &quot;#9b4208&quot;,
            &quot;description&quot;: &quot;Ex et soluta fugiat vel et.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 7,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/id&quot;
        },
        {
            &quot;id&quot;: &quot;afec48e9-16a0-3547-918f-4040c1b3bf6d&quot;,
            &quot;name&quot;: &quot;Omnis&quot;,
            &quot;slug&quot;: &quot;omnis&quot;,
            &quot;color&quot;: &quot;#ec3252&quot;,
            &quot;description&quot;: &quot;Magnam vitae occaecati quasi laudantium quia esse.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 7,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/omnis&quot;
        },
        {
            &quot;id&quot;: &quot;d8da09a8-9301-3c0d-b1a3-dd41a7c09242&quot;,
            &quot;name&quot;: &quot;Fugiat&quot;,
            &quot;slug&quot;: &quot;fugiat&quot;,
            &quot;color&quot;: &quot;#f02ffe&quot;,
            &quot;description&quot;: &quot;Nihil aperiam a dolorem vel perferendis distinctio adipisci.&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
            &quot;posts_count&quot;: 7,
            &quot;url&quot;: &quot;http://localhost:8000/api/tags/fugiat&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tags-popular" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tags-popular"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tags-popular"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tags-popular" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tags-popular">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tags-popular" data-method="GET"
      data-path="api/tags/popular"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tags-popular', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tags-popular"
                    onclick="tryItOut('GETapi-tags-popular');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tags-popular"
                    onclick="cancelTryOut('GETapi-tags-popular');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tags-popular"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tags/popular</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tags-popular"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tags-popular"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tags-search">GET api/tags/search</h2>

<p>
</p>



<span id="example-requests-GETapi-tags-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tags/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tags/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tags-search">
            <blockquote>
            <p>Example response (400):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Termo de busca &eacute; obrigat&oacute;rio.&quot;,
    &quot;error&quot;: &quot;MISSING_SEARCH_TERM&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tags-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tags-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tags-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tags-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tags-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tags-search" data-method="GET"
      data-path="api/tags/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tags-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tags-search"
                    onclick="tryItOut('GETapi-tags-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tags-search"
                    onclick="cancelTryOut('GETapi-tags-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tags-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tags/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tags-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tags-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-tags--id-">GET api/tags/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-tags--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tags--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
        &quot;name&quot;: &quot;Ut&quot;,
        &quot;slug&quot;: &quot;ut&quot;,
        &quot;color&quot;: &quot;#24d5a5&quot;,
        &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
        &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
        &quot;posts_count&quot;: 9,
        &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tags--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tags--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tags--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tags--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tags--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tags--id-" data-method="GET"
      data-path="api/tags/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tags--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tags--id-"
                    onclick="tryItOut('GETapi-tags--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tags--id-"
                    onclick="cancelTryOut('GETapi-tags--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tags--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tags/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-tags--id-"
               value="6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678"
               data-component="url">
    <br>
<p>The ID of the tag. Example: <code>6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-tags--tagId--posts">GET api/tags/{tagId}/posts</h2>

<p>
</p>



<span id="example-requests-GETapi-tags--tagId--posts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678/posts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678/posts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-tags--tagId--posts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: &quot;3a693cbb-4f34-3261-b07c-e04096e0051e&quot;,
            &quot;title&quot;: &quot;Occaecati et labore facere qui.&quot;,
            &quot;slug&quot;: &quot;occaecati-et-labore-facere-qui&quot;,
            &quot;excerpt&quot;: &quot;Adipisci tempora enim velit a illo ducimus ullam. Dolor facere non facilis est hic est autem.&quot;,
            &quot;content&quot;: &quot;Vel qui in quis quam qui impedit maxime consequatur. Ut molestias ipsa similique molestias et. Nobis qui id eaque veritatis autem.\n\nAsperiores voluptate consequuntur deleniti sit maiores enim tempora. Molestiae veniam dignissimos qui eius. Ea dolor tempore aut provident quasi.\n\nPerspiciatis debitis quis et deserunt in sed. Voluptates perspiciatis laudantium et ducimus illum ea. In mollitia laudantium molestias omnis quis aliquam. Aut quae excepturi est nulla sapiente magni.\n\nCulpa nihil quaerat commodi eos. Enim aut fuga voluptatibus aut incidunt itaque. Ex inventore dignissimos quod doloribus.\n\nNumquam hic quisquam sequi qui odio voluptatibus est ut. Dolorum quam aut ut. Ut et voluptas quo maxime. Porro quia possimus officiis dolore cum veritatis natus.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/005555?text=nature+temporibus&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;c68fc6a3-7038-3bc1-8172-b587648b4577&quot;,
                &quot;name&quot;: &quot;Miss America Senger III&quot;,
                &quot;email&quot;: &quot;rbednar@example.com&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;b4a3f55e-64ae-3784-aab0-db987c96dcda&quot;,
                    &quot;name&quot;: &quot;Tempore&quot;,
                    &quot;slug&quot;: &quot;tempore&quot;,
                    &quot;color&quot;: &quot;#c15bef&quot;,
                    &quot;description&quot;: &quot;Officiis quia aut est et nihil.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/tempore&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/occaecati-et-labore-facere-qui&quot;
        },
        {
            &quot;id&quot;: &quot;50d61e2b-2158-3d0c-99df-7733d1a451d3&quot;,
            &quot;title&quot;: &quot;Porro corporis iure possimus quia cum vitae.&quot;,
            &quot;slug&quot;: &quot;porro-corporis-iure-possimus-quia-cum-vitae&quot;,
            &quot;excerpt&quot;: &quot;Cupiditate rem asperiores eos amet dolore quia voluptatem quos. Nisi est sapiente eius.&quot;,
            &quot;content&quot;: &quot;Neque magnam molestiae ullam itaque magni ullam natus est. Corrupti rerum voluptatem optio eos. Illo voluptas quaerat quod quam blanditiis sunt.\n\nOdio in itaque saepe. Quia architecto fuga ad ut eos architecto voluptatem. Est ut est quaerat possimus labore. Et est dolorem a asperiores.\n\nUnde labore molestias sed sed et qui accusamus. Et suscipit iusto ex voluptatem itaque quae eius odit. Accusamus recusandae ratione voluptatem. Eius quia ut et et consequatur velit tenetur.\n\nDistinctio tempore corrupti hic repudiandae et eaque. Vero numquam est dolorem qui explicabo reiciendis perspiciatis cumque. Consequatur accusantium exercitationem ullam et voluptatem iure. Eveniet labore tenetur accusantium ea rem.\n\nEa voluptas nam odit iusto quo et modi et. Sit quis aut provident pariatur ipsa adipisci. Modi earum omnis quia sit neque voluptas. Animi repellat voluptatem ipsam vitae saepe inventore.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00dd66?text=nature+qui&quot;,
            &quot;status&quot;: &quot;published&quot;,
            &quot;published_at&quot;: &quot;2025-05-13T04:18:54.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;498129f8-f403-3640-9a7c-14b9ddb75344&quot;,
                &quot;name&quot;: &quot;Mrs. Therese Huels&quot;,
                &quot;email&quot;: &quot;crooks.lavon@example.com&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;c072cb21-772f-349d-9065-009a360a580d&quot;,
                    &quot;name&quot;: &quot;Recusandae&quot;,
                    &quot;slug&quot;: &quot;recusandae&quot;,
                    &quot;color&quot;: &quot;#26f4b1&quot;,
                    &quot;description&quot;: &quot;Perferendis tempore molestias id non et.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/recusandae&quot;
                },
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/porro-corporis-iure-possimus-quia-cum-vitae&quot;
        },
        {
            &quot;id&quot;: &quot;97c382ad-cf18-382d-912f-637f8cdd3234&quot;,
            &quot;title&quot;: &quot;Ut sed neque sit natus.&quot;,
            &quot;slug&quot;: &quot;ut-sed-neque-sit-natus&quot;,
            &quot;excerpt&quot;: &quot;Et quis adipisci nostrum recusandae amet. Quis voluptatem corrupti minus corporis aut ducimus atque quibusdam. Et eos accusamus facere qui.&quot;,
            &quot;content&quot;: &quot;Quia nemo quos voluptas deleniti. Corrupti praesentium in mollitia praesentium quae enim eligendi laboriosam. Voluptatum voluptate dolor dolores quasi. Est debitis excepturi nihil atque sunt omnis. Voluptatem soluta vel alias eius rerum voluptatem numquam debitis.\n\nRepellat quas similique dolorem quo tenetur nemo et. Quam provident omnis sit occaecati doloremque quia eaque. Atque aliquam voluptatem voluptatem porro. Dolores sit consectetur sit.\n\nIusto aut eum est nesciunt dolore odit omnis. Necessitatibus maxime quis quibusdam nisi sit iure. Reprehenderit qui facere qui consequatur.\n\nConsequatur temporibus eum consequuntur ut. Laboriosam qui quibusdam aliquid quo est minima. Voluptatum rerum ut aut sed.\n\nHic voluptatem fugit est sit. Voluptas tenetur rerum quisquam atque delectus. Blanditiis temporibus illo aut hic dolor possimus facilis. Fugiat neque at fugit aliquam illo facilis.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/009999?text=nature+tempore&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;acf0a2eb-2b60-3c7d-ad16-56eeb1734cb8&quot;,
                &quot;name&quot;: &quot;Iva Kohler&quot;,
                &quot;email&quot;: &quot;rklocko@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;afec48e9-16a0-3547-918f-4040c1b3bf6d&quot;,
                    &quot;name&quot;: &quot;Omnis&quot;,
                    &quot;slug&quot;: &quot;omnis&quot;,
                    &quot;color&quot;: &quot;#ec3252&quot;,
                    &quot;description&quot;: &quot;Magnam vitae occaecati quasi laudantium quia esse.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/omnis&quot;
                },
                {
                    &quot;id&quot;: &quot;c65d0c93-63e0-3b28-8de3-323965348314&quot;,
                    &quot;name&quot;: &quot;Ad&quot;,
                    &quot;slug&quot;: &quot;ad&quot;,
                    &quot;color&quot;: &quot;#55bfa7&quot;,
                    &quot;description&quot;: &quot;Et corrupti impedit repellat doloribus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ad&quot;
                },
                {
                    &quot;id&quot;: &quot;a623ce4b-b432-3f9f-80b6-e9c237e7cefc&quot;,
                    &quot;name&quot;: &quot;Veniam&quot;,
                    &quot;slug&quot;: &quot;veniam&quot;,
                    &quot;color&quot;: &quot;#4f7d6b&quot;,
                    &quot;description&quot;: &quot;Rerum occaecati et ea libero numquam.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/veniam&quot;
                },
                {
                    &quot;id&quot;: &quot;9803d4ae-51ef-3c77-bc68-97cb1cea5353&quot;,
                    &quot;name&quot;: &quot;Cupiditate&quot;,
                    &quot;slug&quot;: &quot;cupiditate&quot;,
                    &quot;color&quot;: &quot;#630e57&quot;,
                    &quot;description&quot;: &quot;Excepturi animi fugiat perferendis aut voluptatum distinctio ratione.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/cupiditate&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/ut-sed-neque-sit-natus&quot;
        },
        {
            &quot;id&quot;: &quot;48a7361a-3d00-3f6f-bd16-0e5066bc3110&quot;,
            &quot;title&quot;: &quot;Reprehenderit mollitia aut vitae.&quot;,
            &quot;slug&quot;: &quot;reprehenderit-mollitia-aut-vitae&quot;,
            &quot;excerpt&quot;: &quot;Sunt dicta dolorem laborum ut soluta. Facere magni blanditiis quam consectetur. In qui et vel amet omnis nobis.&quot;,
            &quot;content&quot;: &quot;At architecto voluptatibus labore officia. Ut modi quibusdam sed. Animi tempore et mollitia molestiae. Tenetur sed error nihil eum sint.\n\nMaxime optio dolorum dolorem excepturi. Magnam magni delectus est hic reprehenderit. Et et non natus nihil minus itaque sint. Ut unde eligendi et eum sapiente.\n\nExercitationem minima exercitationem sint. At rem dolores voluptatem ea rem ab non numquam. Quia in perspiciatis velit adipisci recusandae. Perspiciatis corrupti voluptas dignissimos hic provident.\n\nRatione sunt totam vel. Non blanditiis aut vel impedit quisquam. Laborum maxime amet corporis qui officiis rerum ut. Quas ipsum accusantium sint amet.\n\nQuis consequatur sunt commodi vel laudantium nobis. Atque qui sapiente quibusdam. Alias harum necessitatibus et dolorum in est rerum.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00cc11?text=nature+enim&quot;,
            &quot;status&quot;: &quot;published&quot;,
            &quot;published_at&quot;: &quot;2024-07-31T23:16:19.000000Z&quot;,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;c68fc6a3-7038-3bc1-8172-b587648b4577&quot;,
                &quot;name&quot;: &quot;Miss America Senger III&quot;,
                &quot;email&quot;: &quot;rbednar@example.com&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;ad8304ce-1537-39c5-b50e-db3eb33a2dc9&quot;,
                    &quot;name&quot;: &quot;Accusantium&quot;,
                    &quot;slug&quot;: &quot;accusantium&quot;,
                    &quot;color&quot;: &quot;#9d8461&quot;,
                    &quot;description&quot;: &quot;Reprehenderit doloribus odit et quasi.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/accusantium&quot;
                },
                {
                    &quot;id&quot;: &quot;d8da09a8-9301-3c0d-b1a3-dd41a7c09242&quot;,
                    &quot;name&quot;: &quot;Fugiat&quot;,
                    &quot;slug&quot;: &quot;fugiat&quot;,
                    &quot;color&quot;: &quot;#f02ffe&quot;,
                    &quot;description&quot;: &quot;Nihil aperiam a dolorem vel perferendis distinctio adipisci.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/fugiat&quot;
                },
                {
                    &quot;id&quot;: &quot;b4a3f55e-64ae-3784-aab0-db987c96dcda&quot;,
                    &quot;name&quot;: &quot;Tempore&quot;,
                    &quot;slug&quot;: &quot;tempore&quot;,
                    &quot;color&quot;: &quot;#c15bef&quot;,
                    &quot;description&quot;: &quot;Officiis quia aut est et nihil.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/tempore&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/reprehenderit-mollitia-aut-vitae&quot;
        },
        {
            &quot;id&quot;: &quot;a39562e1-3209-3b90-a603-3e37578a3d69&quot;,
            &quot;title&quot;: &quot;Perferendis sint nesciunt voluptatibus aut sunt.&quot;,
            &quot;slug&quot;: &quot;perferendis-sint-nesciunt-voluptatibus-aut-sunt&quot;,
            &quot;excerpt&quot;: &quot;Dolor placeat excepturi quis. Unde quo laborum qui ut eos. Deserunt ipsum ab repellendus est commodi pariatur.&quot;,
            &quot;content&quot;: &quot;Explicabo asperiores aut optio voluptatem. Dicta totam vitae impedit ut architecto. Illum natus dolor est nihil et odio.\n\nVitae accusantium nemo rerum recusandae cum sed quos. Dignissimos eveniet tempore cupiditate ipsa. Vel voluptatem totam harum magnam velit amet. Molestias earum provident repellendus corporis dolorem reprehenderit ipsum modi.\n\nIpsum libero labore sit voluptatum beatae asperiores. Sapiente itaque aut ut est eligendi.\n\nCommodi sequi quasi dolorum harum atque aut. Quam ullam sed voluptatum eaque.\n\nMinus reprehenderit impedit consequatur necessitatibus esse nisi sunt unde. Eveniet distinctio molestiae enim. Sunt in voluptatem ullam numquam natus error. Qui culpa rerum saepe voluptas omnis.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00eeaa?text=nature+consequatur&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;379a13b5-86df-3917-8478-071d9e6a4ef0&quot;,
                &quot;name&quot;: &quot;Arno Parker&quot;,
                &quot;email&quot;: &quot;stewart76@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;d62fb390-ceba-357d-89a9-bbe0fb2e31f5&quot;,
                    &quot;name&quot;: &quot;Dolor&quot;,
                    &quot;slug&quot;: &quot;dolor&quot;,
                    &quot;color&quot;: &quot;#481fc9&quot;,
                    &quot;description&quot;: &quot;Excepturi aperiam consequatur numquam iure libero voluptatibus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/dolor&quot;
                },
                {
                    &quot;id&quot;: &quot;afec48e9-16a0-3547-918f-4040c1b3bf6d&quot;,
                    &quot;name&quot;: &quot;Omnis&quot;,
                    &quot;slug&quot;: &quot;omnis&quot;,
                    &quot;color&quot;: &quot;#ec3252&quot;,
                    &quot;description&quot;: &quot;Magnam vitae occaecati quasi laudantium quia esse.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/omnis&quot;
                },
                {
                    &quot;id&quot;: &quot;06e969d2-7957-3d3c-b333-924e13a9fd88&quot;,
                    &quot;name&quot;: &quot;Soluta&quot;,
                    &quot;slug&quot;: &quot;soluta&quot;,
                    &quot;color&quot;: &quot;#fbd7f0&quot;,
                    &quot;description&quot;: &quot;Enim voluptas id et omnis eos.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/soluta&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/perferendis-sint-nesciunt-voluptatibus-aut-sunt&quot;
        },
        {
            &quot;id&quot;: &quot;d1948a75-8cf0-3dbe-be64-1314c253acaa&quot;,
            &quot;title&quot;: &quot;Illo qui amet suscipit ratione blanditiis facilis itaque.&quot;,
            &quot;slug&quot;: &quot;illo-qui-amet-suscipit-ratione-blanditiis-facilis-itaque&quot;,
            &quot;excerpt&quot;: &quot;Eius vero earum voluptas reiciendis harum. Quibusdam non rerum commodi magni perferendis. Fuga aut occaecati veniam.&quot;,
            &quot;content&quot;: &quot;Pariatur labore enim excepturi eum quia et aut. Debitis nulla debitis quod adipisci. Nisi ut debitis porro qui eaque. Eveniet maxime modi iste aut aut similique atque.\n\nQuae voluptatem ut delectus autem enim error at. Amet quisquam aut non officia sit sunt. Eius sint omnis in.\n\nCorporis itaque iusto tempore quis quod. Ducimus et dicta est ullam. Omnis nam assumenda quod. Excepturi voluptas in voluptatibus.\n\nEveniet omnis velit earum quam quia cupiditate. Nisi expedita quas et culpa est molestiae quia sunt. In sunt voluptas sunt voluptas rerum necessitatibus ad assumenda.\n\nDolores suscipit laudantium id hic. Et placeat et saepe atque ut quia. Sint nesciunt est sit reiciendis ducimus id odio.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00ee66?text=nature+aliquid&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;498129f8-f403-3640-9a7c-14b9ddb75344&quot;,
                &quot;name&quot;: &quot;Mrs. Therese Huels&quot;,
                &quot;email&quot;: &quot;crooks.lavon@example.com&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;a623ce4b-b432-3f9f-80b6-e9c237e7cefc&quot;,
                    &quot;name&quot;: &quot;Veniam&quot;,
                    &quot;slug&quot;: &quot;veniam&quot;,
                    &quot;color&quot;: &quot;#4f7d6b&quot;,
                    &quot;description&quot;: &quot;Rerum occaecati et ea libero numquam.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/veniam&quot;
                },
                {
                    &quot;id&quot;: &quot;43ba10c5-f16a-3530-a69e-b77f9d32ec91&quot;,
                    &quot;name&quot;: &quot;Excepturi&quot;,
                    &quot;slug&quot;: &quot;excepturi&quot;,
                    &quot;color&quot;: &quot;#de329b&quot;,
                    &quot;description&quot;: &quot;Praesentium excepturi animi doloremque dolores accusamus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/excepturi&quot;
                },
                {
                    &quot;id&quot;: &quot;e4175f2d-cf9a-3d8c-8bad-1051fa2d7e1f&quot;,
                    &quot;name&quot;: &quot;Eligendi&quot;,
                    &quot;slug&quot;: &quot;eligendi&quot;,
                    &quot;color&quot;: &quot;#8fb95f&quot;,
                    &quot;description&quot;: &quot;Veritatis dolor ut consectetur omnis recusandae.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/eligendi&quot;
                },
                {
                    &quot;id&quot;: &quot;6e054f7e-dca7-362a-bebb-ce586c4f93eb&quot;,
                    &quot;name&quot;: &quot;Enim&quot;,
                    &quot;slug&quot;: &quot;enim&quot;,
                    &quot;color&quot;: &quot;#315c7e&quot;,
                    &quot;description&quot;: &quot;Est quaerat sapiente tenetur dolor.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/enim&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/illo-qui-amet-suscipit-ratione-blanditiis-facilis-itaque&quot;
        },
        {
            &quot;id&quot;: &quot;1ba6af69-9e34-3b23-8b41-77c926dce76b&quot;,
            &quot;title&quot;: &quot;Minus itaque autem omnis repudiandae velit quo.&quot;,
            &quot;slug&quot;: &quot;minus-itaque-autem-omnis-repudiandae-velit-quo&quot;,
            &quot;excerpt&quot;: &quot;Et molestiae et eaque repellendus. Repudiandae aliquam odio vel blanditiis voluptatem quo. Qui unde quibusdam quo.&quot;,
            &quot;content&quot;: &quot;Ut porro architecto qui numquam et ab. Laboriosam a esse voluptatibus ut. Totam velit sed ut eum maxime sit eligendi. Quo dolorem repudiandae neque repudiandae cumque. Sit atque porro veniam placeat alias.\n\nMagni et voluptate ut rerum. Fugiat ut ut eum aut id rem. Magni ab consequatur debitis repellendus nemo consectetur voluptatum dolor. Non ducimus molestiae et doloremque et beatae.\n\nEst voluptatem voluptates amet natus tempora assumenda. Omnis dolorem sint laudantium. Aut voluptas nobis sunt voluptatem. Vel consequuntur saepe iste omnis ut atque repellendus.\n\nQuae id velit veritatis mollitia. Labore nemo quae ratione alias dolorum repudiandae.\n\nEst rem vel incidunt quis quia fugiat provident iusto. Officiis quia veniam impedit qui. Ea mollitia et blanditiis odit.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/001133?text=nature+vero&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;c2bd5225-fd12-333f-bf02-22251cd5ba1f&quot;,
                &quot;name&quot;: &quot;Ardella Waelchi&quot;,
                &quot;email&quot;: &quot;hannah27@example.org&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:10.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;d62fb390-ceba-357d-89a9-bbe0fb2e31f5&quot;,
                    &quot;name&quot;: &quot;Dolor&quot;,
                    &quot;slug&quot;: &quot;dolor&quot;,
                    &quot;color&quot;: &quot;#481fc9&quot;,
                    &quot;description&quot;: &quot;Excepturi aperiam consequatur numquam iure libero voluptatibus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/dolor&quot;
                },
                {
                    &quot;id&quot;: &quot;31d3cbe2-f754-3fd7-91a2-4f6f2f0aad4c&quot;,
                    &quot;name&quot;: &quot;Velit&quot;,
                    &quot;slug&quot;: &quot;velit&quot;,
                    &quot;color&quot;: &quot;#38b945&quot;,
                    &quot;description&quot;: &quot;Porro odit et ad adipisci eos reprehenderit voluptates.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/velit&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/minus-itaque-autem-omnis-repudiandae-velit-quo&quot;
        },
        {
            &quot;id&quot;: &quot;c6a3c866-06ea-3802-b91d-38ff4a36ce30&quot;,
            &quot;title&quot;: &quot;Molestias consequuntur aperiam corporis accusantium aut.&quot;,
            &quot;slug&quot;: &quot;molestias-consequuntur-aperiam-corporis-accusantium-aut&quot;,
            &quot;excerpt&quot;: &quot;Quasi excepturi magnam consequuntur cum architecto. Id aut reiciendis laborum incidunt distinctio nesciunt et hic.&quot;,
            &quot;content&quot;: &quot;Sunt repellat accusantium optio. Natus vitae eos eos amet reiciendis. Dolor enim beatae quis labore tenetur maiores quasi.\n\nVelit voluptate aliquam dignissimos voluptates. Ut blanditiis aliquam dolorem voluptate.\n\nAut tempore amet dignissimos nostrum quo. Sint id eum dolores est voluptatibus dolore cumque atque. Et sunt ullam et quod qui. Suscipit tempora officia ducimus quibusdam.\n\nMinima ut minus laudantium. Velit doloremque nihil odit qui molestias quia atque. Et non delectus sapiente ea.\n\nFugit enim laboriosam iusto saepe quis ut. Optio soluta enim sed maxime aperiam. Aut distinctio quas illum voluptatem facere. Molestiae praesentium recusandae saepe a.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/00cc22?text=nature+corporis&quot;,
            &quot;status&quot;: &quot;archived&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;e488c5ce-3868-3952-8100-6877daef7e42&quot;,
                &quot;name&quot;: &quot;Reva Franecki V&quot;,
                &quot;email&quot;: &quot;jeff76@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;ad8304ce-1537-39c5-b50e-db3eb33a2dc9&quot;,
                    &quot;name&quot;: &quot;Accusantium&quot;,
                    &quot;slug&quot;: &quot;accusantium&quot;,
                    &quot;color&quot;: &quot;#9d8461&quot;,
                    &quot;description&quot;: &quot;Reprehenderit doloribus odit et quasi.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/accusantium&quot;
                },
                {
                    &quot;id&quot;: &quot;afec48e9-16a0-3547-918f-4040c1b3bf6d&quot;,
                    &quot;name&quot;: &quot;Omnis&quot;,
                    &quot;slug&quot;: &quot;omnis&quot;,
                    &quot;color&quot;: &quot;#ec3252&quot;,
                    &quot;description&quot;: &quot;Magnam vitae occaecati quasi laudantium quia esse.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/omnis&quot;
                },
                {
                    &quot;id&quot;: &quot;c65d0c93-63e0-3b28-8de3-323965348314&quot;,
                    &quot;name&quot;: &quot;Ad&quot;,
                    &quot;slug&quot;: &quot;ad&quot;,
                    &quot;color&quot;: &quot;#55bfa7&quot;,
                    &quot;description&quot;: &quot;Et corrupti impedit repellat doloribus.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ad&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/molestias-consequuntur-aperiam-corporis-accusantium-aut&quot;
        },
        {
            &quot;id&quot;: &quot;ff2347de-a4ee-3098-9e1c-010f680fcef5&quot;,
            &quot;title&quot;: &quot;Quia culpa quibusdam exercitationem est provident est ducimus.&quot;,
            &quot;slug&quot;: &quot;quia-culpa-quibusdam-exercitationem-est-provident-est-ducimus&quot;,
            &quot;excerpt&quot;: &quot;Ipsam et in repellendus voluptatibus. Aperiam nihil in hic. Ut molestiae ipsam ea qui a dolorem.&quot;,
            &quot;content&quot;: &quot;Dignissimos voluptas aut ab quae. Dignissimos facilis eos atque modi non. Dolore illo nisi ullam dicta soluta omnis sit. Deserunt dignissimos sed et laborum natus quae atque.\n\nIure nihil nobis omnis magni et perspiciatis animi. Ut iste quos aut aut enim dolorem blanditiis. Dolorum ullam voluptas dolor rerum aliquid.\n\nAccusantium est sint aspernatur asperiores. Et pariatur et iure porro quis voluptatum. Consectetur modi voluptatem cupiditate voluptates fuga qui rerum. Accusantium est aut ut veritatis nulla quia sequi. Ipsum ducimus sint qui qui.\n\nQuas quo iure quisquam autem eum. Dolorum dolore quasi ea et veniam. Aut harum sequi in quia impedit ducimus.\n\nQuo amet possimus sequi aliquid fugit sed atque sit. Ut qui deserunt blanditiis aut sunt qui. Natus quis dolorem nostrum dolorem fugit et adipisci.&quot;,
            &quot;featured_image_url&quot;: &quot;https://via.placeholder.com/640x480.png/0077ff?text=nature+architecto&quot;,
            &quot;status&quot;: &quot;draft&quot;,
            &quot;published_at&quot;: null,
            &quot;created_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-25T06:21:13.000000Z&quot;,
            &quot;user&quot;: {
                &quot;id&quot;: &quot;e488c5ce-3868-3952-8100-6877daef7e42&quot;,
                &quot;name&quot;: &quot;Reva Franecki V&quot;,
                &quot;email&quot;: &quot;jeff76@example.net&quot;,
                &quot;created_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;,
                &quot;updated_at&quot;: &quot;2025-06-25T06:21:11.000000Z&quot;
            },
            &quot;tags&quot;: [
                {
                    &quot;id&quot;: &quot;6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678&quot;,
                    &quot;name&quot;: &quot;Ut&quot;,
                    &quot;slug&quot;: &quot;ut&quot;,
                    &quot;color&quot;: &quot;#24d5a5&quot;,
                    &quot;description&quot;: &quot;Ea esse unde odit ad.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/ut&quot;
                },
                {
                    &quot;id&quot;: &quot;d8da09a8-9301-3c0d-b1a3-dd41a7c09242&quot;,
                    &quot;name&quot;: &quot;Fugiat&quot;,
                    &quot;slug&quot;: &quot;fugiat&quot;,
                    &quot;color&quot;: &quot;#f02ffe&quot;,
                    &quot;description&quot;: &quot;Nihil aperiam a dolorem vel perferendis distinctio adipisci.&quot;,
                    &quot;created_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2025-06-25T06:21:12.000000Z&quot;,
                    &quot;url&quot;: &quot;http://localhost:8000/api/tags/fugiat&quot;
                }
            ],
            &quot;url&quot;: &quot;http://localhost:8000/api/posts/quia-culpa-quibusdam-exercitationem-est-provident-est-ducimus&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678/posts?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678/posts?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678/posts?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678/posts&quot;,
        &quot;per_page&quot;: 15,
        &quot;to&quot;: 9,
        &quot;total&quot;: 9
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-tags--tagId--posts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-tags--tagId--posts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-tags--tagId--posts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-tags--tagId--posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-tags--tagId--posts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-tags--tagId--posts" data-method="GET"
      data-path="api/tags/{tagId}/posts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-tags--tagId--posts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-tags--tagId--posts"
                    onclick="tryItOut('GETapi-tags--tagId--posts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-tags--tagId--posts"
                    onclick="cancelTryOut('GETapi-tags--tagId--posts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-tags--tagId--posts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/tags/{tagId}/posts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-tags--tagId--posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-tags--tagId--posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>tagId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="tagId"                data-endpoint="GETapi-tags--tagId--posts"
               value="6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678"
               data-component="url">
    <br>
<p>Example: <code>6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-auth-login">POST api/auth/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-login">
</span>
<span id="execution-results-POSTapi-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-login" data-method="POST"
      data-path="api/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-login"
                    onclick="tryItOut('POSTapi-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-login"
                    onclick="cancelTryOut('POSTapi-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-login"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-auth-register">POST api/auth/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\",
    \"password_confirmation\": \"aykcmyuwpwlvqwrsitcpscqldz\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw",
    "password_confirmation": "aykcmyuwpwlvqwrsitcpscqldz"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-register">
</span>
<span id="execution-results-POSTapi-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-register" data-method="POST"
      data-path="api/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-register"
                    onclick="tryItOut('POSTapi-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-register"
                    onclick="cancelTryOut('POSTapi-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-auth-register"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-auth-register"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-auth-register"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-auth-register"
               value="aykcmyuwpwlvqwrsitcpscqldz"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>aykcmyuwpwlvqwrsitcpscqldz</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-auth-logout">POST api/auth/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-auth-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/auth/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-auth-logout">
</span>
<span id="execution-results-POSTapi-auth-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-auth-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-auth-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-auth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-auth-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-auth-logout" data-method="POST"
      data-path="api/auth/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-auth-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-auth-logout"
                    onclick="tryItOut('POSTapi-auth-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-auth-logout"
                    onclick="cancelTryOut('POSTapi-auth-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-auth-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/auth/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-auth-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-auth-profile">GET api/auth/profile</h2>

<p>
</p>



<span id="example-requests-GETapi-auth-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8000/api/auth/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/auth/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-auth-profile">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Token de acesso inv&aacute;lido ou expirado.&quot;,
    &quot;error&quot;: &quot;UNAUTHENTICATED&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-auth-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-auth-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-auth-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-auth-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-auth-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-auth-profile" data-method="GET"
      data-path="api/auth/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-auth-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-auth-profile"
                    onclick="tryItOut('GETapi-auth-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-auth-profile"
                    onclick="cancelTryOut('GETapi-auth-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-auth-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/auth/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-auth-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-users">POST api/users</h2>

<p>
</p>



<span id="example-requests-POSTapi-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-users">
</span>
<span id="execution-results-POSTapi-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-users" data-method="POST"
      data-path="api/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-users"
                    onclick="tryItOut('POSTapi-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-users"
                    onclick="cancelTryOut('POSTapi-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-users"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-users"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-users"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-users--id-">PUT api/users/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-users--id-">
</span>
<span id="execution-results-PUTapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-users--id-" data-method="PUT"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-users--id-"
                    onclick="tryItOut('PUTapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-users--id-"
                    onclick="cancelTryOut('PUTapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-users--id-"
               value="dfdf7436-566a-35a9-a78a-e4aea63f9f3d"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>dfdf7436-566a-35a9-a78a-e4aea63f9f3d</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-users--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="PUTapi-users--id-"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="PUTapi-users--id-"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-users--id-">DELETE api/users/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/users/dfdf7436-566a-35a9-a78a-e4aea63f9f3d"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-users--id-">
</span>
<span id="execution-results-DELETEapi-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-users--id-" data-method="DELETE"
      data-path="api/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-users--id-"
                    onclick="tryItOut('DELETEapi-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-users--id-"
                    onclick="cancelTryOut('DELETEapi-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-users--id-"
               value="dfdf7436-566a-35a9-a78a-e4aea63f9f3d"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>dfdf7436-566a-35a9-a78a-e4aea63f9f3d</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-posts">POST api/posts</h2>

<p>
</p>



<span id="example-requests-POSTapi-posts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/posts" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": \"architecto\",
    \"title\": \"n\",
    \"slug\": \"g\",
    \"excerpt\": \"z\",
    \"content\": \"architecto\",
    \"featured_image_url\": \"http:\\/\\/bailey.com\\/\",
    \"status\": \"draft\",
    \"published_at\": \"2025-06-25T06:59:14\",
    \"tag_ids\": [
        \"architecto\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/posts"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "architecto",
    "title": "n",
    "slug": "g",
    "excerpt": "z",
    "content": "architecto",
    "featured_image_url": "http:\/\/bailey.com\/",
    "status": "draft",
    "published_at": "2025-06-25T06:59:14",
    "tag_ids": [
        "architecto"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-posts">
</span>
<span id="execution-results-POSTapi-posts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-posts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-posts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-posts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-posts" data-method="POST"
      data-path="api/posts"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-posts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-posts"
                    onclick="tryItOut('POSTapi-posts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-posts"
                    onclick="cancelTryOut('POSTapi-posts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-posts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/posts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="POSTapi-posts"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-posts"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="POSTapi-posts"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>excerpt</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="excerpt"                data-endpoint="POSTapi-posts"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-posts"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>featured_image_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="featured_image_url"                data-endpoint="POSTapi-posts"
               value="http://bailey.com/"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://bailey.com/</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-posts"
               value="draft"
               data-component="body">
    <br>
<p>Example: <code>draft</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>draft</code></li> <li><code>published</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>published_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="published_at"                data-endpoint="POSTapi-posts"
               value="2025-06-25T06:59:14"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-06-25T06:59:14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="tag_ids[0]"                data-endpoint="POSTapi-posts"
               data-component="body">
        <input type="text" style="display: none"
               name="tag_ids[1]"                data-endpoint="POSTapi-posts"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the tags table.</p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-posts--id-">PUT api/posts/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-posts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"user_id\": \"architecto\",
    \"title\": \"n\",
    \"slug\": \"g\",
    \"excerpt\": \"z\",
    \"content\": \"architecto\",
    \"featured_image_url\": \"http:\\/\\/bailey.com\\/\",
    \"status\": \"draft\",
    \"published_at\": \"2025-06-25T06:59:14\",
    \"tag_ids\": [
        \"architecto\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "user_id": "architecto",
    "title": "n",
    "slug": "g",
    "excerpt": "z",
    "content": "architecto",
    "featured_image_url": "http:\/\/bailey.com\/",
    "status": "draft",
    "published_at": "2025-06-25T06:59:14",
    "tag_ids": [
        "architecto"
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-posts--id-">
</span>
<span id="execution-results-PUTapi-posts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-posts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-posts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-posts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-posts--id-" data-method="PUT"
      data-path="api/posts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-posts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-posts--id-"
                    onclick="tryItOut('PUTapi-posts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-posts--id-"
                    onclick="cancelTryOut('PUTapi-posts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-posts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/posts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-posts--id-"
               value="4e88f2d9-c935-31ab-bb90-fdd2e54a5452"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>4e88f2d9-c935-31ab-bb90-fdd2e54a5452</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>user_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="user_id"                data-endpoint="PUTapi-posts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the users table. Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="PUTapi-posts--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="PUTapi-posts--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>excerpt</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="excerpt"                data-endpoint="PUTapi-posts--id-"
               value="z"
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>z</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="PUTapi-posts--id-"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>featured_image_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="featured_image_url"                data-endpoint="PUTapi-posts--id-"
               value="http://bailey.com/"
               data-component="body">
    <br>
<p>Must be a valid URL. Example: <code>http://bailey.com/</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-posts--id-"
               value="draft"
               data-component="body">
    <br>
<p>Example: <code>draft</code></p>
Must be one of:
<ul style="list-style-type: square;"><li><code>draft</code></li> <li><code>published</code></li></ul>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>published_at</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="published_at"                data-endpoint="PUTapi-posts--id-"
               value="2025-06-25T06:59:14"
               data-component="body">
    <br>
<p>Must be a valid date. Example: <code>2025-06-25T06:59:14</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="tag_ids[0]"                data-endpoint="PUTapi-posts--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="tag_ids[1]"                data-endpoint="PUTapi-posts--id-"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the tags table.</p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-posts--id-">DELETE api/posts/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-posts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-posts--id-">
</span>
<span id="execution-results-DELETEapi-posts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-posts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-posts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-posts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-posts--id-" data-method="DELETE"
      data-path="api/posts/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-posts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-posts--id-"
                    onclick="tryItOut('DELETEapi-posts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-posts--id-"
                    onclick="cancelTryOut('DELETEapi-posts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-posts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/posts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-posts--id-"
               value="4e88f2d9-c935-31ab-bb90-fdd2e54a5452"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>4e88f2d9-c935-31ab-bb90-fdd2e54a5452</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-posts--post_id--publish">POST api/posts/{post_id}/publish</h2>

<p>
</p>



<span id="example-requests-POSTapi-posts--post_id--publish">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452/publish" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452/publish"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-posts--post_id--publish">
</span>
<span id="execution-results-POSTapi-posts--post_id--publish" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-posts--post_id--publish"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-posts--post_id--publish"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-posts--post_id--publish" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-posts--post_id--publish">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-posts--post_id--publish" data-method="POST"
      data-path="api/posts/{post_id}/publish"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-posts--post_id--publish', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-posts--post_id--publish"
                    onclick="tryItOut('POSTapi-posts--post_id--publish');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-posts--post_id--publish"
                    onclick="cancelTryOut('POSTapi-posts--post_id--publish');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-posts--post_id--publish"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/posts/{post_id}/publish</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-posts--post_id--publish"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-posts--post_id--publish"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>post_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="post_id"                data-endpoint="POSTapi-posts--post_id--publish"
               value="4e88f2d9-c935-31ab-bb90-fdd2e54a5452"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>4e88f2d9-c935-31ab-bb90-fdd2e54a5452</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-posts--post_id--unpublish">POST api/posts/{post_id}/unpublish</h2>

<p>
</p>



<span id="example-requests-POSTapi-posts--post_id--unpublish">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452/unpublish" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/posts/4e88f2d9-c935-31ab-bb90-fdd2e54a5452/unpublish"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-posts--post_id--unpublish">
</span>
<span id="execution-results-POSTapi-posts--post_id--unpublish" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-posts--post_id--unpublish"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-posts--post_id--unpublish"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-posts--post_id--unpublish" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-posts--post_id--unpublish">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-posts--post_id--unpublish" data-method="POST"
      data-path="api/posts/{post_id}/unpublish"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-posts--post_id--unpublish', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-posts--post_id--unpublish"
                    onclick="tryItOut('POSTapi-posts--post_id--unpublish');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-posts--post_id--unpublish"
                    onclick="cancelTryOut('POSTapi-posts--post_id--unpublish');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-posts--post_id--unpublish"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/posts/{post_id}/unpublish</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-posts--post_id--unpublish"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-posts--post_id--unpublish"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>post_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="post_id"                data-endpoint="POSTapi-posts--post_id--unpublish"
               value="4e88f2d9-c935-31ab-bb90-fdd2e54a5452"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>4e88f2d9-c935-31ab-bb90-fdd2e54a5452</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-tags">POST api/tags</h2>

<p>
</p>



<span id="example-requests-POSTapi-tags">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8000/api/tags" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"slug\": \"n\",
    \"color\": \"#fEEeDb\",
    \"description\": \"Accusantium harum mollitia modi deserunt aut ab.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tags"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "slug": "n",
    "color": "#fEEeDb",
    "description": "Accusantium harum mollitia modi deserunt aut ab."
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-tags">
</span>
<span id="execution-results-POSTapi-tags" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-tags"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-tags"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-tags">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-tags" data-method="POST"
      data-path="api/tags"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-tags', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-tags"
                    onclick="tryItOut('POSTapi-tags');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-tags"
                    onclick="cancelTryOut('POSTapi-tags');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-tags"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/tags</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-tags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-tags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-tags"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="POSTapi-tags"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="POSTapi-tags"
               value="#fEEeDb"
               data-component="body">
    <br>
<p>Must match the regex /^#[0-9A-Fa-f]{6}$/. Example: <code>#fEEeDb</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-tags"
               value="Accusantium harum mollitia modi deserunt aut ab."
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>Accusantium harum mollitia modi deserunt aut ab.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-tags--id-">PUT api/tags/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-tags--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"slug\": \"n\",
    \"color\": \"#fEEeDb\",
    \"description\": \"Accusantium harum mollitia modi deserunt aut ab.\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "slug": "n",
    "color": "#fEEeDb",
    "description": "Accusantium harum mollitia modi deserunt aut ab."
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-tags--id-">
</span>
<span id="execution-results-PUTapi-tags--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-tags--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-tags--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-tags--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-tags--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-tags--id-" data-method="PUT"
      data-path="api/tags/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-tags--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-tags--id-"
                    onclick="tryItOut('PUTapi-tags--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-tags--id-"
                    onclick="cancelTryOut('PUTapi-tags--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-tags--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/tags/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-tags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-tags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-tags--id-"
               value="6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678"
               data-component="url">
    <br>
<p>The ID of the tag. Example: <code>6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-tags--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="PUTapi-tags--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="color"                data-endpoint="PUTapi-tags--id-"
               value="#fEEeDb"
               data-component="body">
    <br>
<p>Must match the regex /^#[0-9A-Fa-f]{6}$/. Example: <code>#fEEeDb</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-tags--id-"
               value="Accusantium harum mollitia modi deserunt aut ab."
               data-component="body">
    <br>
<p>Must not be greater than 500 characters. Example: <code>Accusantium harum mollitia modi deserunt aut ab.</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-tags--id-">DELETE api/tags/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-tags--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8000/api/tags/6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-tags--id-">
</span>
<span id="execution-results-DELETEapi-tags--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-tags--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-tags--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-tags--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-tags--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-tags--id-" data-method="DELETE"
      data-path="api/tags/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-tags--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-tags--id-"
                    onclick="tryItOut('DELETEapi-tags--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-tags--id-"
                    onclick="cancelTryOut('DELETEapi-tags--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-tags--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/tags/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-tags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-tags--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-tags--id-"
               value="6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678"
               data-component="url">
    <br>
<p>The ID of the tag. Example: <code>6bcd0e96-7ef8-3c64-97ee-c9b9a7f7b678</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>

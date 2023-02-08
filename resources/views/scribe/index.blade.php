<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

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
                    body .content .php-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost:8081";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.13.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.13.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">

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
                                            <button type="button" class="lang-button" data-language-name="php">php</button>
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
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTv1-driver-login">
                                <a href="#endpoints-POSTv1-driver-login">POST v1/driver/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTv1-driver-register">
                                <a href="#endpoints-POSTv1-driver-register">POST v1/driver/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETv1-driver-profile">
                                <a href="#endpoints-GETv1-driver-profile">GET v1/driver/profile</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTv1-driver-updateGPS">
                                <a href="#endpoints-POSTv1-driver-updateGPS">POST v1/driver/updateGPS</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTv1-user-login">
                                <a href="#endpoints-POSTv1-user-login">POST v1/user/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTv1-user-register">
                                <a href="#endpoints-POSTv1-user-register">POST v1/user/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETv1-user-drivers">
                                <a href="#endpoints-GETv1-user-drivers">GET v1/user/drivers</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETv1-user-driver">
                                <a href="#endpoints-GETv1-user-driver">GET v1/user/driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTv1-user-driver">
                                <a href="#endpoints-POSTv1-user-driver">POST v1/user/driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTv1-user-driver">
                                <a href="#endpoints-PUTv1-user-driver">PUT v1/user/driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEv1-user-driver">
                                <a href="#endpoints-DELETEv1-user-driver">DELETE v1/user/driver</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTv1-user-driver-search">
                                <a href="#endpoints-POSTv1-user-driver-search">POST v1/user/driver/search</a>
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
        <li>Last updated: February 8, 2023</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost:8081</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTv1-driver-login">POST v1/driver/login</h2>

<p>
</p>



<span id="example-requests-POSTv1-driver-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8081/v1/driver/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
    --data "{
    \"phone_number\": \"qui\",
    \"password\": \"non\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/driver/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

let body = {
    "phone_number": "qui",
    "password": "non"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8081/v1/driver/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
        'json' =&gt; [
            'phone_number' =&gt; 'qui',
            'password' =&gt; 'non',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTv1-driver-login">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Problemas ao encontrar Motorista. Telefone ou senha podem estar inv&aacute;lidos!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-driver-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-driver-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-driver-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTv1-driver-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-driver-login"></code></pre>
</span>
<form id="form-POSTv1-driver-login" data-method="POST"
      data-path="v1/driver/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-driver-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-driver-login"
                    onclick="tryItOut('POSTv1-driver-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-driver-login"
                    onclick="cancelTryOut('POSTv1-driver-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-driver-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/driver/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTv1-driver-login"
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
               name="Accept"                data-endpoint="POSTv1-driver-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="POSTv1-driver-login"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone_number"                data-endpoint="POSTv1-driver-login"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTv1-driver-login"
               value="non"
               data-component="body">
    <br>
<p>Example: <code>non</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTv1-driver-register">POST v1/driver/register</h2>

<p>
</p>



<span id="example-requests-POSTv1-driver-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8081/v1/driver/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
    --data "{
    \"phone_number\": \"aperiam\",
    \"password\": \"voluptatem\",
    \"first_name\": \"ea\",
    \"email\": \"eius\",
    \"gender\": \"aut\",
    \"birth_date\": \"officia\",
    \"license\": \"et\",
    \"dt_license_expired\": \"molestiae\",
    \"plate\": \"voluptate\",
    \"ride_model\": \"sed\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/driver/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

let body = {
    "phone_number": "aperiam",
    "password": "voluptatem",
    "first_name": "ea",
    "email": "eius",
    "gender": "aut",
    "birth_date": "officia",
    "license": "et",
    "dt_license_expired": "molestiae",
    "plate": "voluptate",
    "ride_model": "sed"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8081/v1/driver/register',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
        'json' =&gt; [
            'phone_number' =&gt; 'aperiam',
            'password' =&gt; 'voluptatem',
            'first_name' =&gt; 'ea',
            'email' =&gt; 'eius',
            'gender' =&gt; 'aut',
            'birth_date' =&gt; 'officia',
            'license' =&gt; 'et',
            'dt_license_expired' =&gt; 'molestiae',
            'plate' =&gt; 'voluptate',
            'ride_model' =&gt; 'sed',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTv1-driver-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;driver&quot;: &quot;Attempt to read property \&quot;id\&quot; on string&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-driver-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-driver-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-driver-register" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTv1-driver-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-driver-register"></code></pre>
</span>
<form id="form-POSTv1-driver-register" data-method="POST"
      data-path="v1/driver/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-driver-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-driver-register"
                    onclick="tryItOut('POSTv1-driver-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-driver-register"
                    onclick="cancelTryOut('POSTv1-driver-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-driver-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/driver/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTv1-driver-register"
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
               name="Accept"                data-endpoint="POSTv1-driver-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="POSTv1-driver-register"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone_number"                data-endpoint="POSTv1-driver-register"
               value="aperiam"
               data-component="body">
    <br>
<p>Example: <code>aperiam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTv1-driver-register"
               value="voluptatem"
               data-component="body">
    <br>
<p>Example: <code>voluptatem</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="first_name"                data-endpoint="POSTv1-driver-register"
               value="ea"
               data-component="body">
    <br>
<p>Example: <code>ea</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="last_name"                data-endpoint="POSTv1-driver-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTv1-driver-register"
               value="eius"
               data-component="body">
    <br>
<p>Example: <code>eius</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="gender"                data-endpoint="POSTv1-driver-register"
               value="aut"
               data-component="body">
    <br>
<p>Example: <code>aut</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birth_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="birth_date"                data-endpoint="POSTv1-driver-register"
               value="officia"
               data-component="body">
    <br>
<p>Example: <code>officia</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>license</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="license"                data-endpoint="POSTv1-driver-register"
               value="et"
               data-component="body">
    <br>
<p>Example: <code>et</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dt_license_expired</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="dt_license_expired"                data-endpoint="POSTv1-driver-register"
               value="molestiae"
               data-component="body">
    <br>
<p>Example: <code>molestiae</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_style</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="payment_style"                data-endpoint="POSTv1-driver-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>plate</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="plate"                data-endpoint="POSTv1-driver-register"
               value="voluptate"
               data-component="body">
    <br>
<p>Example: <code>voluptate</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="year"                data-endpoint="POSTv1-driver-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="model"                data-endpoint="POSTv1-driver-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="brand"                data-endpoint="POSTv1-driver-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="color"                data-endpoint="POSTv1-driver-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>renavam</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="renavam"                data-endpoint="POSTv1-driver-register"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ride_model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="ride_model"                data-endpoint="POSTv1-driver-register"
               value="sed"
               data-component="body">
    <br>
<p>Example: <code>sed</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETv1-driver-profile">GET v1/driver/profile</h2>

<p>
</p>



<span id="example-requests-GETv1-driver-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8081/v1/driver/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/driver/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8081/v1/driver/profile',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETv1-driver-profile">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Token inv&aacute;lido!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-driver-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-driver-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-driver-profile" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETv1-driver-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-driver-profile"></code></pre>
</span>
<form id="form-GETv1-driver-profile" data-method="GET"
      data-path="v1/driver/profile"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-driver-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-driver-profile"
                    onclick="tryItOut('GETv1-driver-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-driver-profile"
                    onclick="cancelTryOut('GETv1-driver-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-driver-profile" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/driver/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETv1-driver-profile"
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
               name="Accept"                data-endpoint="GETv1-driver-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="GETv1-driver-profile"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTv1-driver-updateGPS">POST v1/driver/updateGPS</h2>

<p>
</p>



<span id="example-requests-POSTv1-driver-updateGPS">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8081/v1/driver/updateGPS" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/driver/updateGPS"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8081/v1/driver/updateGPS',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTv1-driver-updateGPS">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Token inv&aacute;lido!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-driver-updateGPS" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-driver-updateGPS"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-driver-updateGPS" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTv1-driver-updateGPS" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-driver-updateGPS"></code></pre>
</span>
<form id="form-POSTv1-driver-updateGPS" data-method="POST"
      data-path="v1/driver/updateGPS"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-driver-updateGPS', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-driver-updateGPS"
                    onclick="tryItOut('POSTv1-driver-updateGPS');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-driver-updateGPS"
                    onclick="cancelTryOut('POSTv1-driver-updateGPS');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-driver-updateGPS" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/driver/updateGPS</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTv1-driver-updateGPS"
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
               name="Accept"                data-endpoint="POSTv1-driver-updateGPS"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="POSTv1-driver-updateGPS"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTv1-user-login">POST v1/user/login</h2>

<p>
</p>



<span id="example-requests-POSTv1-user-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8081/v1/user/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
    --data "{
    \"email\": \"iusto\",
    \"password\": \"error\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/user/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

let body = {
    "email": "iusto",
    "password": "error"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8081/v1/user/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
        'json' =&gt; [
            'email' =&gt; 'iusto',
            'password' =&gt; 'error',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTv1-user-login">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Problemas ao encontrar Usu&aacute;rio. Telefone ou senha podem estar inv&aacute;lidos!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-user-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-user-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-user-login" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTv1-user-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-user-login"></code></pre>
</span>
<form id="form-POSTv1-user-login" data-method="POST"
      data-path="v1/user/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-user-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-user-login"
                    onclick="tryItOut('POSTv1-user-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-user-login"
                    onclick="cancelTryOut('POSTv1-user-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-user-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/user/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTv1-user-login"
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
               name="Accept"                data-endpoint="POSTv1-user-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="POSTv1-user-login"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTv1-user-login"
               value="iusto"
               data-component="body">
    <br>
<p>Example: <code>iusto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTv1-user-login"
               value="error"
               data-component="body">
    <br>
<p>Example: <code>error</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTv1-user-register">POST v1/user/register</h2>

<p>
</p>



<span id="example-requests-POSTv1-user-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8081/v1/user/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
    --data "{
    \"name\": \"vero\",
    \"email\": \"laboriosam\",
    \"password\": \"quo\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/user/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

let body = {
    "name": "vero",
    "email": "laboriosam",
    "password": "quo"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8081/v1/user/register',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
        'json' =&gt; [
            'name' =&gt; 'vero',
            'email' =&gt; 'laboriosam',
            'password' =&gt; 'quo',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTv1-user-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 54
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;user&quot;: {
        &quot;name&quot;: &quot;vero&quot;,
        &quot;email&quot;: &quot;laboriosam&quot;,
        &quot;updated_at&quot;: &quot;2023-02-08T03:13:55.000000Z&quot;,
        &quot;created_at&quot;: &quot;2023-02-08T03:13:55.000000Z&quot;,
        &quot;id&quot;: 1
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-user-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-user-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-user-register" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTv1-user-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-user-register"></code></pre>
</span>
<form id="form-POSTv1-user-register" data-method="POST"
      data-path="v1/user/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-user-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-user-register"
                    onclick="tryItOut('POSTv1-user-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-user-register"
                    onclick="cancelTryOut('POSTv1-user-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-user-register" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/user/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTv1-user-register"
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
               name="Accept"                data-endpoint="POSTv1-user-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="POSTv1-user-register"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="name"                data-endpoint="POSTv1-user-register"
               value="vero"
               data-component="body">
    <br>
<p>Example: <code>vero</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTv1-user-register"
               value="laboriosam"
               data-component="body">
    <br>
<p>Example: <code>laboriosam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTv1-user-register"
               value="quo"
               data-component="body">
    <br>
<p>Example: <code>quo</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETv1-user-drivers">GET v1/user/drivers</h2>

<p>
</p>



<span id="example-requests-GETv1-user-drivers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8081/v1/user/drivers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/user/drivers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8081/v1/user/drivers',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETv1-user-drivers">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 53
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Token inv&aacute;lido!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-user-drivers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-user-drivers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-user-drivers" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETv1-user-drivers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-user-drivers"></code></pre>
</span>
<form id="form-GETv1-user-drivers" data-method="GET"
      data-path="v1/user/drivers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-user-drivers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-user-drivers"
                    onclick="tryItOut('GETv1-user-drivers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-user-drivers"
                    onclick="cancelTryOut('GETv1-user-drivers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-user-drivers" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/user/drivers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETv1-user-drivers"
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
               name="Accept"                data-endpoint="GETv1-user-drivers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="GETv1-user-drivers"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETv1-user-driver">GET v1/user/driver</h2>

<p>
</p>



<span id="example-requests-GETv1-user-driver">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost:8081/v1/user/driver" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
    --data "{
    \"driver_id\": \"atque\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/user/driver"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

let body = {
    "driver_id": "atque"
};

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost:8081/v1/user/driver',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
        'json' =&gt; [
            'driver_id' =&gt; 'atque',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-GETv1-user-driver">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 52
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Token inv&aacute;lido!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETv1-user-driver" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETv1-user-driver"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETv1-user-driver" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETv1-user-driver" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETv1-user-driver"></code></pre>
</span>
<form id="form-GETv1-user-driver" data-method="GET"
      data-path="v1/user/driver"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETv1-user-driver', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETv1-user-driver"
                    onclick="tryItOut('GETv1-user-driver');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETv1-user-driver"
                    onclick="cancelTryOut('GETv1-user-driver');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETv1-user-driver" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>v1/user/driver</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="GETv1-user-driver"
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
               name="Accept"                data-endpoint="GETv1-user-driver"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="GETv1-user-driver"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>driver_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="driver_id"                data-endpoint="GETv1-user-driver"
               value="atque"
               data-component="body">
    <br>
<p>Example: <code>atque</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTv1-user-driver">POST v1/user/driver</h2>

<p>
</p>



<span id="example-requests-POSTv1-user-driver">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8081/v1/user/driver" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
    --data "{
    \"phone_number\": \"numquam\",
    \"password\": \"veritatis\",
    \"first_name\": \"qui\",
    \"email\": \"blanditiis\",
    \"gender\": \"dolor\",
    \"birth_date\": \"in\",
    \"license\": \"sequi\",
    \"dt_license_expired\": \"rerum\",
    \"plate\": \"quis\",
    \"ride_model\": \"eos\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/user/driver"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

let body = {
    "phone_number": "numquam",
    "password": "veritatis",
    "first_name": "qui",
    "email": "blanditiis",
    "gender": "dolor",
    "birth_date": "in",
    "license": "sequi",
    "dt_license_expired": "rerum",
    "plate": "quis",
    "ride_model": "eos"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8081/v1/user/driver',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
        'json' =&gt; [
            'phone_number' =&gt; 'numquam',
            'password' =&gt; 'veritatis',
            'first_name' =&gt; 'qui',
            'email' =&gt; 'blanditiis',
            'gender' =&gt; 'dolor',
            'birth_date' =&gt; 'in',
            'license' =&gt; 'sequi',
            'dt_license_expired' =&gt; 'rerum',
            'plate' =&gt; 'quis',
            'ride_model' =&gt; 'eos',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTv1-user-driver">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 51
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Token inv&aacute;lido!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-user-driver" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-user-driver"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-user-driver" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTv1-user-driver" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-user-driver"></code></pre>
</span>
<form id="form-POSTv1-user-driver" data-method="POST"
      data-path="v1/user/driver"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-user-driver', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-user-driver"
                    onclick="tryItOut('POSTv1-user-driver');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-user-driver"
                    onclick="cancelTryOut('POSTv1-user-driver');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-user-driver" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/user/driver</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTv1-user-driver"
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
               name="Accept"                data-endpoint="POSTv1-user-driver"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="POSTv1-user-driver"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="phone_number"                data-endpoint="POSTv1-user-driver"
               value="numquam"
               data-component="body">
    <br>
<p>Example: <code>numquam</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="POSTv1-user-driver"
               value="veritatis"
               data-component="body">
    <br>
<p>Example: <code>veritatis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="first_name"                data-endpoint="POSTv1-user-driver"
               value="qui"
               data-component="body">
    <br>
<p>Example: <code>qui</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="last_name"                data-endpoint="POSTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="POSTv1-user-driver"
               value="blanditiis"
               data-component="body">
    <br>
<p>Example: <code>blanditiis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="gender"                data-endpoint="POSTv1-user-driver"
               value="dolor"
               data-component="body">
    <br>
<p>Example: <code>dolor</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birth_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="birth_date"                data-endpoint="POSTv1-user-driver"
               value="in"
               data-component="body">
    <br>
<p>Example: <code>in</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>license</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="license"                data-endpoint="POSTv1-user-driver"
               value="sequi"
               data-component="body">
    <br>
<p>Example: <code>sequi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dt_license_expired</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="dt_license_expired"                data-endpoint="POSTv1-user-driver"
               value="rerum"
               data-component="body">
    <br>
<p>Example: <code>rerum</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_style</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="payment_style"                data-endpoint="POSTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>plate</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="plate"                data-endpoint="POSTv1-user-driver"
               value="quis"
               data-component="body">
    <br>
<p>Example: <code>quis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="year"                data-endpoint="POSTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="model"                data-endpoint="POSTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="brand"                data-endpoint="POSTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>color</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="color"                data-endpoint="POSTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>renavam</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="renavam"                data-endpoint="POSTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ride_model</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="ride_model"                data-endpoint="POSTv1-user-driver"
               value="eos"
               data-component="body">
    <br>
<p>Example: <code>eos</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTv1-user-driver">PUT v1/user/driver</h2>

<p>
</p>



<span id="example-requests-PUTv1-user-driver">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost:8081/v1/user/driver" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
    --data "{
    \"driver_id\": \"excepturi\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/user/driver"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

let body = {
    "driver_id": "excepturi"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost:8081/v1/user/driver',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
        'json' =&gt; [
            'driver_id' =&gt; 'excepturi',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-PUTv1-user-driver">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 50
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Token inv&aacute;lido!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-PUTv1-user-driver" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTv1-user-driver"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTv1-user-driver" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTv1-user-driver" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTv1-user-driver"></code></pre>
</span>
<form id="form-PUTv1-user-driver" data-method="PUT"
      data-path="v1/user/driver"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTv1-user-driver', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTv1-user-driver"
                    onclick="tryItOut('PUTv1-user-driver');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTv1-user-driver"
                    onclick="cancelTryOut('PUTv1-user-driver');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTv1-user-driver" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>v1/user/driver</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="PUTv1-user-driver"
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
               name="Accept"                data-endpoint="PUTv1-user-driver"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="PUTv1-user-driver"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>driver_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="driver_id"                data-endpoint="PUTv1-user-driver"
               value="excepturi"
               data-component="body">
    <br>
<p>Example: <code>excepturi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>phone_number</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="phone_number"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="password"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="first_name"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>last_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="last_name"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="email"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>gender</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="gender"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>birth_date</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="birth_date"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>license</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="license"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>dt_license_expired</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="dt_license_expired"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>payment_style</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="payment_style"                data-endpoint="PUTv1-user-driver"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-DELETEv1-user-driver">DELETE v1/user/driver</h2>

<p>
</p>



<span id="example-requests-DELETEv1-user-driver">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost:8081/v1/user/driver" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
    --data "{
    \"driver_id\": \"ipsum\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/user/driver"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

let body = {
    "driver_id": "ipsum"
};

fetch(url, {
    method: "DELETE",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost:8081/v1/user/driver',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
        'json' =&gt; [
            'driver_id' =&gt; 'ipsum',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-DELETEv1-user-driver">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 49
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Token inv&aacute;lido!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-DELETEv1-user-driver" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEv1-user-driver"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEv1-user-driver" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEv1-user-driver" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEv1-user-driver"></code></pre>
</span>
<form id="form-DELETEv1-user-driver" data-method="DELETE"
      data-path="v1/user/driver"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEv1-user-driver', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEv1-user-driver"
                    onclick="tryItOut('DELETEv1-user-driver');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEv1-user-driver"
                    onclick="cancelTryOut('DELETEv1-user-driver');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEv1-user-driver" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>v1/user/driver</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="DELETEv1-user-driver"
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
               name="Accept"                data-endpoint="DELETEv1-user-driver"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="DELETEv1-user-driver"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>driver_id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="driver_id"                data-endpoint="DELETEv1-user-driver"
               value="ipsum"
               data-component="body">
    <br>
<p>Example: <code>ipsum</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTv1-user-driver-search">POST v1/user/driver/search</h2>

<p>
</p>



<span id="example-requests-POSTv1-user-driver-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost:8081/v1/user/driver/search" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --header "TOKEN: eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo" \
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost:8081/v1/user/driver/search"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
    "TOKEN": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>


<div class="php-example">
    <pre><code class="language-php">$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost:8081/v1/user/driver/search',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
            'TOKEN' =&gt; 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre></div>

</span>

<span id="example-responses-POSTv1-user-driver-search">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 48
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: false,
    &quot;error&quot;: &quot;Token inv&aacute;lido!&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTv1-user-driver-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTv1-user-driver-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTv1-user-driver-search" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTv1-user-driver-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTv1-user-driver-search"></code></pre>
</span>
<form id="form-POSTv1-user-driver-search" data-method="POST"
      data-path="v1/user/driver/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTv1-user-driver-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTv1-user-driver-search"
                    onclick="tryItOut('POSTv1-user-driver-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTv1-user-driver-search"
                    onclick="cancelTryOut('POSTv1-user-driver-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTv1-user-driver-search" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>v1/user/driver/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="Content-Type"                data-endpoint="POSTv1-user-driver-search"
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
               name="Accept"                data-endpoint="POSTv1-user-driver-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>TOKEN</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
               name="TOKEN"                data-endpoint="POSTv1-user-driver-search"
               value="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo"
               data-component="header">
    <br>
<p>Example: <code>eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7ImlzcyI6Im1vb3ZlYXBwIiwibmFtZSI6ImNhaW8gVGVzdGUiLCJlbWFpbCI6ImNhaW9AbWl6dW5vLmNvbSIsInBob25lX251bWJlciI6IjEyMzEyMyIsInRpbWUiOiJ0b2RheTE2NzU3MzM0OTcifX0=.sGbKqSI_aYJIFxT8_hVNVN29FRKgIn3YWDu1EAJVoqo</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>first_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="first_name"                data-endpoint="POSTv1-user-driver-search"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>plate</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="plate"                data-endpoint="POSTv1-user-driver-search"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cpf</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="cpf"                data-endpoint="POSTv1-user-driver-search"
               value=""
               data-component="body">
    <br>

        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>license</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
               name="license"                data-endpoint="POSTv1-user-driver-search"
               value=""
               data-component="body">
    <br>

        </div>
        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                                                        <button type="button" class="lang-button" data-language-name="php">php</button>
                            </div>
            </div>
</div>
</body>
</html>

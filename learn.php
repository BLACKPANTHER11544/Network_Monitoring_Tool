<?php
  session_start() ;
  if(!$_SESSION['auth']){
     header('Location: /NMT1/login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Product Documentation</title>
  <link rel="stylesheet" href="learn.css">
</head>
<body>
  <header>
    <h1>NMT Documentation</h1>
  </header>

  <nav>
    <ul class="nav-links">
      <li><a href="#introduction">Introduction</a></li>
      <li><a href="#Tech-used">Tech</a></li>
      <li><a href="#usage">Usage</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="/NMT/NMT11/Home.php">Home</a></li>
    </ul>
  </nav>

  <main>
    <section id="introduction">
      <h2>Introduction</h2>
      <p>
        Welcome to the documentation for Network Monitoring Tool . This page provides information on how to use and what technology is used to make this tool and also how you can use this tool for your advantage.
        
        <div> 
        <p>Portocol based monitoring  </p>
          <ul> 
            <li>Arp ->  <br> 
             <p>Address Resolution Protocol (ARP) is a protocol or procedure that connects an ever-changing Internet Protocol (IP) address to a fixed physical machine address, also known as a media access control (MAC) address, in a local-area network (LAN). </p>
            </li>
            <li>Udp-> <br>
            <p>
            User datagram packets are an internet protocol suite used to send messages to other hosts on an Internet Protocol network. Within an IP network, UDP does not require prior communication to set up communication channels or data paths.
            </p>
            </li> 
            <li>Tcp -> <br> 
            <p> 
            Transmission Control Protocol (TCP) is a standard that defines how to establish and maintain a network conversation by which applications can exchange data.
            </p>
            </li>  
          </ul> 
          <span>Using Tcpdump</span> 
          <ul> 
             <li> Tcpdump -> <br> 
             <p>tcpdump is a data-network packet analyzer computer program that runs under a command line interface. It allows the user to display TCP/IP and other packets being transmitted or received over a network to which the computer is attached. </p> 
             </li> 
          </ul> 
          <span>Commands used in tcpdump</span> 
           <table> 
              <tr> 
                 <th>Terminal Command</th> 
                 <th>Description</th> 
              </tr> 
              <tr> 
                  <td>tcpdump</td>
                  <td>This command will start capturing the data packet on the network your computer is connected to. </td>  
              </tr> 
              <tr> 
                 <td>ifconfig</td>
                 <td>This command is not a tcpdump command instead its a unix terminal command and it give info about ethernet and loopback interfce</td>
              </tr> 
              <tr> 
                 <td>tcpdump -c 10</td>
                 <td>The -c and 10 here defines that we only want to capture 10 data packets -c stand for count and 10 is number of packets</td>
              </tr> 
              <tr> 
                 <td>tcpdump -i eth03 -c 10 </td>
                 <td>-i show the interactiveness and enth03 is our interface on which we're listining for traffic</td>
              </tr> 
              <tr> 
                 <td>tcpdump -i enth03 -c 10 host 10.0.2.4</td>
                 <td>host is the host speifier and 10.0.2.4 is the host machine , we capture either incoming/outgoing traffic on host</td>
              </tr> 
              <tr> 
                 <td>tcpdump -i enth03 -c 10 src host 10.0.2.4</td>
                 <td>src means source , meaning only capturing the outgoing traffic from host 10.0.2.4</td>
              </tr> 
              <tr> 
                 <td>tcpdump -i enth03 -c 10 udp</td>
                 <td>udp means capture only those packets where protocol is Udp </td>
              </tr> 
              <tr> 
                 <td>tcpdump -i enth03 -c 10 udp -n</td>
                 <td>-n tells not to convert the ip address to machine address</td>
              </tr> 
              <tr> 
                 <td>tcpdump -i enth03 -c 10 ipv4</td>
                 <td>ipv4 will only capture the packet who follow ipv4 </td>
              </tr> 
           </table> 
        </div> 
      </p>
    </section>

    <section id="Tech-used">
      <h2>Technology Used in development</h2>
      <p>
        Following is the tech stack used to develop NMT (Network Monitoring Tool):
      </p>
      <ol>
        <li>Step 1: Install LAMP stack</li>
        <li>Step 2: Use unix based operating system </li>
        <li>Step 3: Get Server (xampp,appache)</li>
        <li>Step 4: Get Mysql and Php </li>
      </ol>
    </section>

    <section id="usage">
      <h2>Usage</h2>
      <p>
        Here's how you can use NMT in your Browser:
      </p>
      <pre>
        <ol> 
           <li>Use Network Analyzer button to navigate to the Network analyzer page</li>
           <li>Select the interface on which you wish to monitor the tracffic</li>
           <li>Select the protocol for the data packets </li>
           <li>Select the Number of data packets you wish to capture</li>
           <li>Analyze the produced output , if you wished to capture ARP protocol based packets then use LAN </li> 
        </ol>
      </pre>
    </section>

    <section id="faq">
      <h2>FAQ</h2>
      <p>
        Frequently asked questions about My Product:
      </p>
      <ul>
        <li>Q: How is this beneficial to normal people ?</li>
        <li>A: This can help normal people to monitor any maliciousness on the Network .</li>
        <!-- Add more FAQ items here -->
      </ul>
    </section>
  </main>

<?php
include("footer.php")
?>
</body>
</html>


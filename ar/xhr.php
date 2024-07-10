<?php 

if($_GET['first'] == 'get-website-dns-records'){
    
    $dnsall = dns_get_record($_GET['websiteUrl'], DNS_ALL);
  
    if(!empty($dnsall)){
        $dnshtml = '<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th scope="col">Record Type</th>
                <th scope="col">Entries</th>
            </tr>
        </thead>';
        
        foreach($dnsall as $dns){
        switch ($dns['type']) {
          case "A":
            $key = 'ip';
            break;
          case "SOA":
          $key = 'rname';
            break;
          case "TXT":
            $key = 'txt';
            break;
            case "AAAA":
            $key = 'ipv6';
            break;
         case "CAA":
            $key = 'value';
            break;
          default:
           $key = 'target';
        }
                    
          $dnshtml .= '<tr>
    <td>
        <span class="badge text-bg-info">'.$dns['type'].'</span>
    </td>
    <td>
        <div>'.$dns[ $key].'</div>
    </td>
</tr>';
        }
        
    $dnshtml .= ' </tbody></table></div>';
    $response = array('status' => 200, 'html' => $dnshtml);
    }else{
        $response = array('status' => 400, 'message' => 'Please write a valid website url.');
    }
    echo json_encode($response);
    exit;
  
}

if($_GET['first'] == 'whois'){
    
    if(!empty($_GET['websiteUrl'])){
        $domain = $_REQUEST['websiteUrl'];
        // $whois = shell_exec("whois '" . $domain . "'");
        $whois = QueryWhoisServer("whois.verisign-grs.com", $domain);
        if(!empty($whois)){
            if(empty($whois['Domain Name'])){
                $response = array('status' => 400, 'message' => 'Closing connections because of Timeout.');
            }else{
           
            $whoishtml = '<div class="container">
    <div class="whois_content mb-3 pb-1">
        <div class="row">
            <div class="col-lg-8">
                <div class="widget_head">
                <img class="img_ico" src="https://t3.gstatic.com/faviconV2?client=SOCIAL&type=FAVICON&fallback_opts=TYPE,SIZE,URL&url=http://'.$domain.'&size=64" alt="" srcset="">
                <h5>'.$whois['Domain Name'].'</h5>
                </div>
                <div class="whois_info">
                    <p>Registered On</p>
                    <h6>'.$whois['Creation Date'].'</h6>
                </div>
                <div class="whois_info">
                    <p>Expires On</p>
                    <h6>'.$whois['Registrar Registration Expiration Date'].'</h6>
                </div>
                <div class="whois_info">
                    <p>Updated On</p>
                    <h6>'.$whois['Updated Date'].'</h6>
                </div>
                <div class="whois_info">
                    <p>Status</p>
                    <h6>'.$whois['Domain Status'].'</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-end">
                    <div class="whois_site_img">
                        <div class="position-absolute whois_skel_head">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="whois_skel_logo skel_loading"></div>
                                <div class="d-inline-flex align-items-center links">
                                    <div class="whois_skel_link skel_loading"></div>
                                    <div class="whois_skel_link skel_loading"></div>
                                    <div class="whois_skel_link skel_loading"></div>
                                    <div class="whois_skel_link skel_loading"></div>
                                </div>
                            </div>
                        </div>
                        <div class="position-absolute whois_skel_body">
                            <div class="d-flex align-items-center justify-content-between h-100">
                                <div class="info">
                                    <div class="whois_skel_title skel_loading"></div>
                                    <div class="whois_skel_sub skel_loading"></div>
                                </div>
                                <div class="whois_skel_thumb skel_loading"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    

    $ipdata = ip_details(gethostbyname($domain));
        
     $whoishtml .= '<div class="row">
        <div class="col-lg-6">
            <div class="whois_content mb-3 pb-1">
                <div class="widget_head">
                    <div class="icon" style="background-color: #B4E3CA;"></div>
                    <h5>Registrant Information</h5>
                </div>
                <div class="whois_info">
                    <p>Registrant</p>
                    <h6>'.$whois['Registrar'].'</h6>
                </div>
                <div class="whois_info">
                    <p>Registrant Website</p>
                    <h6>'.$whois['Registrar URL'].'</h6>
                </div>
                <div class="whois_info">
                    <p>Registrant Email</p>
                    <h6>'.$whois['Registrar Email'].'</h6>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="whois_content mb-3 pb-1">
                <div class="widget_head">
                    <div class="icon" style="background-color: #CABDFD;"></div>
                    <h5>Website IP Details</h5>
                </div>
                <div class="whois_info">
                    <p>Website IP Address</p>
                    <h6>'.$ipdata['ip'].'</h6>
                </div>
                <div class="whois_info">
                    <p>IP Company Name</p>
                    <h6>'.$ipdata['org'].'</h6>
                </div>
                <div class="whois_info">
                    <p>IP Country</p>
                    <h6>'.$ipdata['country'].'</h6>
                </div>
            </div>
        </div>
    </div>';
    
    $dns = dns_get_record($domain, DNS_NS);
    
    $whoishtml .= '<div class="whois_content mb-3 pb-2">
        <div class="widget_head">
            <div class="icon" style="background-color: #B0E4FB;"></div>
            <h5>Name Servers</h5>
        </div>
        <div class="table-responsive whois_table">
            <table class="table table-borderless mb-1">
                <thead>
                    <tr>
                        <th scope="col">Host</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>'.$dns[0]['target'].'</td></tr><tr><td>'.$dns[1]['target'].'</td></tr>
                </tbody>
            </table>
        </div>
    </div>';
    
    $whoishtml .= '<div class="whois_content mb-3 pb-2">
        <div class="widget_head">
            <div class="icon" style="background-color: #FFD891;"></div>
            <h5>RAW WHOIS</h5>
        </div>
        <div class="whois_raw_details">
            <br />
Closing connections because of Timeout
        </div>
    </div>';
    
    $whoishtml .= '</div>';
                 $response = array('createScreenshot' => true,'status' => 200, 'html' => $whoishtml, 'url'=>$_GET['websiteUrl']);
            }
        }
    }else{
        $response = array('status' => 400, 'message' => 'Please write a valid website url.');
    }
  
    echo json_encode($response);
    exit;
}

function ip_details($ip) {
  $json = file_get_contents("http://ipinfo.io/{$ip}/geo");
  $details = json_decode($json, true);
  return $details;
}

function GetWhoisInfo($whoisserver, $domain){
  $port = 43;
  $timeout = 10;
  $fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Socket Error " . $errno . " - " . $errstr);
  stream_set_blocking($fp, true);
  fputs($fp, $domain . "\r\n");
  $out = "";

  while(!feof($fp)){
      $out .= fgets($fp);       
  }

  fclose($fp);  
  return $out;
}

function GetRegistrarWhoisServer($whoisserver, $domain) {
  $out = GetWhoisInfo($whoisserver, $domain);
  $rws_string = explode("\r\n", $out);
  $rws = explode("Registrar WHOIS Server: ", $rws_string[2])[1];  
  return $rws; 
}

function WhoisToJson($winfo) {
  $winfoarr = explode(PHP_EOL, $winfo);
  $jsonarr = [];
  foreach($winfoarr as $info){
   $infodata = explode(": ", $info);
   if($infodata[0] !== "")$jsonarr[$infodata[0]] = $infodata[1];    
   //avoid to process privacy info at the end of whois service output
   if($infodata[0] === "DNSSEC")break;
  }
  return $jsonarr;
} 

function QueryWhoisServer($whoisserver, $domain) {
  //query to $whoisserver whois to get registrar whois server address only
  $rws = GetRegistrarWhoisServer($whoisserver, $domain);
  

  //query to registrar whois server (registrar whois servers are returning contact infos)
  $out = GetWhoisInfo($rws, $domain);  

  //parsing infos and formatting to json
  return WhoisToJson($out);
} 

?>
date_default_timezone_set(‘Asia/Kolkata’);
$_devicestatus= array(
‘latitude’ => $latitude + 0.0,
‘longitude’ => $longitude + 0.0,
‘battery’ => ‘100’,
‘lastUpdated’ => date(‘Y-m-d H:i:s’)
);
 
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);
$firebase->update($DEFAULT_PATH, $_devicestatus); // updates data in Firebase
print(“POST SUCCESSFUL”);
?>

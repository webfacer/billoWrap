<?php
/**
 * Wrapper for the billomat-API
 *
 * @version 1.0
 * @author Davor Ilic
 * @adapted http://code.google.com/p/billomatwrapper/source/browse/trunk/billomat.php
 * @license GNU General Public License v3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @link http://www.billomat.com/api/
 * @last-update: 10-08-2012 23:30
 */
class billoWrap {
    /**
     * Constants for the available API resources
     */

    const RESOURCE_ARTICLE = 'articles/%u';
    const RESOURCE_ARTICLES = 'articles';
    const RESOURCE_CLIENT = 'clients/%u';
    const RESOURCE_CLIENTS = 'clients';
    const RESOURCE_INVOICE = 'invoices/%u';
    const RESOURCE_INVOICES = 'invoices';
    const RESOURCE_RECURRING = 'recurrings/%u';
    const RESOURCE_RECURRINGS = 'recurrings';
    const RESOURCE_INVOICECOMMENT = 'invoice-comments/%u';
    const RESOURCE_INVOICECOMMENTS = 'invoice-comments?invoice_id=%u';
    const RESOURCE_INVOICEITEM = 'invoice-items/%u';
    const RESOURCE_INVOICEITEMS = 'invoice-items?invoice_id=%u';
    const RESOURCE_INVOICEPAYMENT = 'invoice-payments/%u';
    const RESOURCE_INVOICEPAYMENTS = 'invoice-payments?invoice_id=%u';
    const RESOURCE_OFFER = 'offer/%u';
    const RESOURCE_OFFERS = 'offers';
    const RESOURCE_OFFERCOMMENT = 'offer-comments/%u';
    const RESOURCE_OFFERCOMMENTS = 'offer-comments?offer_id=%u';
    const RESOURCE_OFFERITEM = 'offer-items/%u';
    const RESOURCE_OFFERITEMS = 'offer-items?offer_id=%u';
    const RESOURCE_SETTINGS = 'settings';
    const RESOURCE_TEMPLATE = 'templates/%u';
    const RESOURCE_TEMPLATES = 'templates';
    const RESOURCE_UNIT = 'units/%u';
    const RESOURCE_UNITS = 'units';
    const RESOURCE_USER = 'users/%u';
    const RESOURCE_USERS = 'users';

    /**
     * Constants for regular and SSL Connection
     */
    const HTTP = 'http://';
    const HTTPS = 'https://';
    const HTTP_PORT = 80;
    const HTTPS_PORT = 443;

    /**
     * Constants for Invoice Statuses
     */
    const INVOICE_STATUS_CANCELLED = 'CANCELLED';
    const INVOICE_STATUS_DRAFT = 'DRAFT';
    const INVOICE_STATUS_OPEN = 'OPEN';
    const INVOICE_STATUS_OVERDUE = 'OVERDUE';
    const INVOICE_STATUS_PAYED = 'PAYED';
    
    
    /**
     * The Datatype of the output
     * @var string
     */
    private $dataType; // for using Json false XML
    
    
    /**
     * Converts datatypeoutput from XML or JSON to Array
     * @var bool
     */
    private $convertData;
    

    /**
     * The billomat-Id of the User that the Requests are for
     * @var string
     */
    private $bmId;

    /**
     * The Builded URI from Resources to get the right data
     * @var string
     */
    private $bmRequestURI;

    /**
     * The Host for the API Request
     * @var string
     */
    private $bmApiHost = '.billomat.net/api/%s';

    /**
     * The billomat API Key. At the moment only developers can request API Keys
     * @url http://www.billomat.com/api/grundlagen/#c165
     * @var string
     */
    private $bmApiKey;

    /**
     * If true the request is done by socket, otherwise by curl
     * @var boolean
     */
    private $useSocket;

    /**
     * Properties not in use at the moment:
     */
    private $bmSocket; // true for use SSL-Socket or false for not using it

    /**
     * Contructor
     *
     * @param string The billomat-Id of the User that the Requests are for
     * @param string The billomat API Key
     * @param boolean Use socket (if true) or curl (if false, default)
     */
    public function __construct($bmId, $bmApiKey, $dataType = NULL, $convertData = NULL, $useSocket = FALSE) 
    {
	$this->bmId = $bmId;
	$this->bmApiKey = $bmApiKey;
	$this->dataType = $dataType;
	$this->convertData = $convertData;
	$this->useSocket = $useSocket;
    }
    
    
    /**
     * Description: Get Article Info
     * 
     * @param string Shows if not setted all Articles otherwise if id is given only the Article
     * 
     */
    public function getArticles($id = NULL)
    {
	$resource = self::RESOURCE_ARTICLES;
	
	if($id != NULL)
	{
	    $resource = self::RESOURCE_ARTICLE;
	}
	
	$this->bmRequestURI = sprintf($resource, $id);
	
	return $this->getData();
    }
    
    
    /**
     * Description: Get Client Info
     * 
     * @param string Shows if not setted all Articles otherwise if id is given only the Article
     * 
     */
    public function getClients($id = NULL)
    {
	$resource = self::RESOURCE_CLIENTS;
	
	if($id != NULL)
	{
	    $resource = self::RESOURCE_CLIENT;
	}
	
	$this->bmRequestURI = sprintf($resource, $id);
	
	return $this->getData();
    }
    
    
    /**
     * Description: Get Invoice Info
     * 
     * @param string Shows if not setted all Invoices otherwise if id is given only the Invoice
     * 
     */
    public function getInvoices($id = NULL)
    {
	$resource = self::RESOURCE_INVOICES;
	
	if($id != NULL)
	{
	    $resource = self::RESOURCE_INVOICE;
	}
	
	$this->bmRequestURI = sprintf($resource, $id);
	
	return $this->getData();
    }
    
    
    /**
     * Description: Get Recurring Info
     * 
     * @param string Shows if not setted all Recurrings otherwise if id is given only the Recurring
     * 
     */
    public function getRecurrings($id = NULL)
    {
	$resource = self::RESOURCE_RECURRINGS;
	
	if($id != NULL)
	{
	    $resource = self::RESOURCE_RECURRING;
	}
	
	$this->bmRequestURI = sprintf($resource, $id);
	
	$this->getData();
    }
    
    /**
     * Description: Get the wanted Accept header
     * 
     * @return string
     */
    private function getHeaderAccept()
    {
	
	if($this->dataType)
	{
	    $type = 'json';
	}
	else
	{
	    $type = 'xml';
	}
	
	return $type;
    }
    
    /**
     * Description: Builds the Contenttype Header
     * 
     * 
     */
    private function buildHeader()
    {
	$contentType = 'text/html';
	
	if($this->dataType === TRUE && $this->convertData === FALSE)
	{
	    $contentType = 'application/json';
	}
	else if($this->dataType === FALSE && $this->convertData === FALSE)
	{
	    $contentType = 'application/xml';
	}
	
	header(sprintf('Content-Type: %s', $contentType));
    }
    
    /**
     * Description: Return the Content in the format JSON or XML
     * 
     * @return mixed
     */
    private function getData()
    {
	$data = $this->getRequest();
	
	$this->buildHeader();
	
	if($this->dataType === TRUE && $this->convertData === TRUE)
	{
	    return $this->getJsonDecode($data);
	}
	else if($this->dataType === FALSE && $this->convertData === TRUE)
	{
	    return $this->getXMLDecode($data);
	}
	
	return $data;
    }

    /**
     * Description: Convert Json Objects to Array
     * 
     * @param string $data XML or JSON Data which is requested
     * @param boolen $options from json_encode php.net
     * 
     * @return array
     * 
     */
    private function getJsonDecode($data, $options = TRUE) 
    {
	return json_decode($data, $options);
    }

    /**
     * Description: Convert Json Objects to Array
     * 
     * @param string $data XML or JSON Data which id requested 
     * 
     * @param boolen $options from json_encode php.net
     * 
     * @return array
     * 
     */
    private function getXMLDecode($data, $options = TRUE) 
    {
	return $this->getJsonDecode(json_encode((array) simplexml_load_string($data)), $options);
    }
    
    

    /**
     * Description: get the request from server with curl send
     * 
     * @return string
     * 
     */
    private function getRequest()
    {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	curl_setopt($ch, CURLOPT_URL, $this->setRequestURL($this->bmRequestURI));
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-BillomatApiKey: " . $this->bmApiKey, sprintf("Accept: application/%s", $this->getHeaderAccept())));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt ($ch, CURLOPT_HTTPGET, TRUE);
	$return = curl_exec($ch);
	curl_close($ch);
	return $return;
    }

    /**
     * Prepares the requestet URI for request
     * 
     * @param string $resource is the URI the availabel API (the Resources) from http://www.billomat.com/api/grundlagen/
     * @param bool false for HTTP request or true for HTTPS
     * 
     * @return string 
     * 
     */
    private function setRequestURL($resource, $protocol = TRUE) 
    {

	if ($protocol) {

	    $protocol = self::HTTP;
	    
	} else {
	    
	    $protocol = self::HTTPS;
	    
	}

	if (is_array($resource)) {

	    $resource = implode('', $resource);
	}
	
	return sprintf($protocol . $this->bmId . $this->bmApiHost, $resource);
    }

}

?>
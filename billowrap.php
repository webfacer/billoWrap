<?php
/**
 * Wrapper for the billomat-API
 *
 * @version 1.0.11
 * @author Davor Ilic
 * @adapted http://code.google.com/p/billomatwrapper/source/browse/trunk/billomat.php
 * @license GNU General Public License v3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @link http://www.billomat.com/api/
 * @last-update: 08-10-2012 21:30
 */


class billoWrap {
    
    
    /**
     * Constants for the available API resources
     */
    
    //Clientresources
    const RESOURCE_CLIENTS = 'clients';
    const RESOURCE_CLIENT = 'clients/%u';
    
    const RESOURCE_CLIENT_PROPERTYVALUES = 'client-property-values?client_id=%u';
    const RESOURCE_CLIENT_PROPERTYVALUE = 'client-property-values/%u';
    
    const RESOURCE_CLIENT_TAGS = 'client-tags';
    const RESOURCE_CLIENT_TAG = 'client-tags/%u';
    
    const RESOURCE_CLIENT_CUSTOMFIELD = 'clients/customfield?id=%u';
    
    
    //Articleresources
    const RESOURCE_ARTICLES = 'articles';
    const RESOURCE_ARTICLE = 'articles/%u';
    
    const RESOURCE_ARTICLE_PROPERTYVALUES = 'article-property-values?article_id=%u';
    const RESOURCE_ARTICLE_PROPERTYVALUE = 'article-property-values/%u';
    
    const RESOURCE_ARTICLE_TAGS = 'article-tags';
    const RESOURCE_ARTICLE_TAG = 'article-tags/%u';
    
    
    //Unitresources
    const RESOURCE_UNITS = 'units';
    const RESOURCE_UNIT = 'units/%u';
    
    
    //Invoiceresources
    const RESOURCE_INVOICES = 'invoices';
    const RESOURCE_INVOICE = 'invoices/%u';
    
    const RESOURCE_INVOICE_ITEMS = 'invoice-items?invoice_id=%u';
    const RESOURCE_INVOICE_ITEM = 'invoice-items/%u';
    
    const RESOURCE_INVOICE_COMMENTS = 'invoice-comments?invoice_id=%u';
    const RESOURCE_INVOICE_COMMENT = 'invoice-comments/%u';
    
    const RESOURCE_INVOICE_PAYMENTS = 'invoice-payments';
    const RESOURCE_INVOICE_PAYMENT = 'invoice-payments/%u';
    
    const RESOURCE_INVOICE_TAGS = 'invoice-tags';
    const RESOURCE_INVOICE_TAG = 'invoice-tags/%u';
    
    
    //Recurringresources
    const RESOURCE_RECURRINGS = 'recurrings';
    const RESOURCE_RECURRING = 'recurrings/%u';
    
    const RESOURCE_RECURRING_ITEMS = 'recurring-items?recurring_id=%u';
    const RESOURCE_RECURRING_ITEM = 'recurring-items/%u';
    
    const RESOURCE_RECURRING_TAGS = 'recurring-tags';
    const RESOURCE_RECURRING_TAG = 'recurring-tags/%u';
    
    
    //Offerresources
    const RESOURCE_OFFERS = 'offers';
    const RESOURCE_OFFER = 'offer/%u';
    
    const RESOURCE_OFFER_ITEMS = 'offer-items?offer_id=%u';
    const RESOURCE_OFFER_ITEM = 'offer-items/%u';
    
    const RESOURCE_OFFER_COMMENTS = 'offer-comments?offer_id=%u';
    const RESOURCE_OFFER_COMMENT = 'offer-comments/%u';
    
    const RESOURCE_OFFER_TAGS = 'offer-tags';
    const RESOURCE_OFFER_TAG = 'offer-tags/%u';
    
    
    //Creditnoteresources
    const RESOURCE_CREDITNOTES = 'credit-notes';
    const RESOURCE_CREDITNOTE = 'credit-notes/%u';
    
    const RESOURCE_CREDITNOTE_ITEMS = 'credit-note-items?credit_note_id=%u';
    const RESOURCE_CREDITNOTE_ITEM = 'credit-note-items/%u';
    
    const RESOURCE_CREDITNOTE_COMMENTS = 'credit-note-comments?credit_note_id=%u';
    const RESOURCE_CREDITNOTE_COMMENT = 'credit-note-comments/%u';
    
    const RESOURCE_CREDITNOTE_PAYMENTS = 'credit-note-payments';
    const RESOURCE_CREDITNOTE_PAYMENT = 'credit-note-payments/%u';
    
    const RESOURCE_CREDITNOTE_TAGS = 'credit-note-tags';
    const RESOURCE_CREDITNOTE_TAG = 'credit-note-tags/%u';
    
    
    //Confirmationresources
    const RESOURCE_CONFIRMATIONS = 'confirmations';
    const RESOURCE_CONFIRMATION = 'confirmations/%u';
    
    const RESOURCE_CONFIRMATION_ITEMS = 'confirmation-items?confirmation_id=%u';
    const RESOURCE_CONFIRMATION_ITEM = 'confirmation-items/%u';
    
    const RESOURCE_CONFIRMATION_COMMENTS = 'confirmation-comments?confirmation_id=%u';
    const RESOURCE_CONFIRMATION_COMMENT = 'confirmation-comments/%u';
    
    const RESOURCE_CONFIRMATION_TAGS = 'confirmation-tags';
    const RESOURCE_CONFIRMATION_TAG = 'confirmation-tags/%u';
    
    
    //Reminderresources
    const RESOURCE_REMINDERS = 'reminders';
    const RESOURCE_REMINDER = 'reminders/%u';
    
    const RESOURCE_REMINDER_ITEMS = 'reminder-items?reminder_id=%u';
    const RESOURCE_REMINDER_ITEM = 'reminder-items/%u';
    
    const RESOURCE_REMINDER_TAGS = 'reminder-tags';
    const RESOURCE_REMINDER_TAG = 'reminder-tags/%u';
    
    
    //Deliverynoteresources
    const RESOURCE_DELIVERIENOTES = 'delivery-notes';
    const RESOURCE_DELIVERIENOTE = 'delivery-notes/%u';
    
    const RESOURCE_DELIVERIENOTE_ITEMS = 'delivery-note-items?delivery_note_id=%u';
    const RESOURCE_DELIVERIENOTE_ITEM = 'delivery-note-items/%u';
    
    const RESOURCE_DELIVERIENOTE_COMMENTS = 'delivery-note-comments?delivery_note_id=%u';
    const RESOURCE_DELIVERIENOTE_COMMENT = 'delivery-note-comments/%u';
    
    const RESOURCE_DELIVERIENOTE_TAGS = 'delivery-note-tags';
    const RESOURCE_DELIVERIENOTE_TAG = 'delivery-note-tags/%u';
    
    
    //Templateresources
    const RESOURCE_TEMPLATES = 'templates';
    const RESOURCE_TEMPLATE = 'templates/%u';
    
    
    //Settingresources
    const RESOURCE_SETTINGS = 'settings';
    const RESOURCE_SETTING_ARTICLEPROPERTIES = 'article-properties';
    const RESOURCE_SETTING_ARTICLEPROPERTIE = 'article-properties/%u';
    
    const RESOURCE_SETTING_CLIENTPROPERTIES = 'client-properties';
    const RESOURCE_SETTING_CLIENTPROPERTIE = 'client-properties/%u';
    
    const RESOURCE_SETTING_USERRPROPERTIES = 'user-properties';
    const RESOURCE_SETTING_USERRPROPERTIE = 'user-properties/%u';
    
    const RESOURCE_SETTING_TAXES = 'taxes';
    const RESOURCE_SETTING_TAXE = 'taxes/%u';
    
    const RESOURCE_SETTING_COUNTRYTAXES = 'country-taxes';
    const RESOURCE_SETTING_COUNTRYTAXE = 'country-taxes/%u';
    
    const RESOURCE_SETTING_REMINDERTEXTS = 'reminder-texts';
    const RESOURCE_SETTING_REMINDERTEXT = 'reminder-texts/%u';
    
    
    //Userresources
    const RESOURCE_USERS = 'users';
    const RESOURCE_USER = 'users/%u';
    
    const RESOURCE_USER_PROPERTYVALUES = 'user-property-values?user_id=%u';
    const RESOURCE_USER_PROPERTYVALUE = 'user-property-values/%u';
    

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
     * @var bool
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
     * @param boolean output JSON-Object (if true, default), otherwise it will output XML-Object (if false)
     * @param boolean convert Objectdata to (if true) Array (if false, default)
     * @param boolean Use socket (if true) or curl (if false, default) Notice: it´s not working yet
     */
    public function __construct($bmId, $bmApiKey, $dataType = TRUE, $convertData = FALSE, $useSocket = FALSE) 
    {
	$this->bmId = $bmId;
	$this->bmApiKey = $bmApiKey;
	$this->dataType = $dataType;
	$this->convertData = $convertData;
	$this->useSocket = $useSocket;
    }
    
    
    /**
     * 
     * List all clients
     * 
     * @return mixed JSON - or XML-Object also Array
     * 
     */
    public function getAllClients()
    {
	return $this->setRequestData(self::RESOURCE_CLIENTS);
    }
    
    
    /**
     * Show a specific Client
     * 
     * @param int $id specific client ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleClient($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT, $id));
    }
    
    
    /**
     * Create a client
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addClient($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CLIENTS, $data, 'post');
    }
    
    
    /**
     * Edit client
     * 
     * @param int $id specific client ID
     * @param string $data your JSON or XML you send
     * 
     */
    public function editClient($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT, $id), $data, 'post');
    }
    
    
    /**
     * Delete client
     * 
     * @param int $id client ID
     * 
     */
    public function delClient($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all properties of a client
     * 
     * @param int $id specific client ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllClientPropertyValues($client_id) 
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT_PROPERTYVALUES, $client_id));
    }
    
    
    /**
     * Get a single client property 
     * 
     * @param int $id specific client property ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleClientPropertyValue($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT_PROPERTYVALUE, $id));
    }
    
    
    /**
     * Create a client property value
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addClientPropertyValue($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CLIENT_PROPERTYVALUES, $data, 'post');
    }
    
    
    /**
     * List all client tags
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllClientTags()
    {
	return $this->setRequestData(self::RESOURCE_CLIENT_TAGS);
    }
    
    
    /**
     * Get a single client tag
     * 
     * @param int $id specific client tag ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleClientTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT_TAG, $id));
    }
    
    
    /**
     * Create a client tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addClientTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CLIENT_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete client tag
     * 
     * @param int $id client tag ID
     * 
     */
    public function delClientTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT_TAG, $id), NULL, 'delete');
    }
    
    
    /**
     * Get a specific customfield
     * 
     * @param int $id specific client id ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getClientCustomField($client_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT_CUSTOMFIELD, $client_id));
    }
    
    
    /**
     * List all articles
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllArticles()
    {
	return $this->setRequestData(self::RESOURCE_ARTICLES);
    }
    
    
    /**
     * Show a specific article
     * 
     * @param int $id specific article ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleArticle($id = null)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE, $id));
    }
    
    
    /**
     * Create a article
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addArticle($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_ARTICLES, $data, 'post');
    }
    
    
    /**
     * Edit article
     * 
     * @param int $id article ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editArticle($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE, $id), $data, 'put');
    }
    
    
    /**
     * Delete article
     * 
     * @param int $id article ID
     * 
     */
    public function delArticle($id)
    {
	$this->setRequestData(sprintf(self::RESOURCE_ARTICLE, $id), NULL, 'delete');
    }
    
    
    /**
     * List all properties of a article
     * 
     * @param int $id specific article ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllArticlePropertyValues($article_id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE_PROPERTYVALUES, $article_id));
    }
    
    
    /**
     * Get a single article property
     * 
     * @param int $id specific article property ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleArticlePropertyValue($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE_PROPERTYVALUE, $id));
    }
    
    
    /**
     * Create a article property value
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addArticlePropertyValue($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_ARTICLE_PROPERTYVALUES, $data, 'post');
    }
    
    
    /**
     * List all properties of a client
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllArticleTags()
    {
	return $this->setRequestData(self::RESOURCE_ARTICLE_TAGS);
    }
    
    
    /**
     * Get a single article tag
     * 
     * @param int $id specific article tag ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleArticleTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE_TAG, $id));
    }
    
    
    /**
     * Create a article tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addArticleTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_ARTICLE_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete article tag
     * 
     * @param int $id article tag ID
     * 
     */
    public function delArticleTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE_TAG, $id), NULL, 'delete');
    }
    
    
    /**
     * List all units
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllUnits()
    {
	return $this->setRequestData(self::RESOURCE_UNITS);
    }
    
    
    /**
     * Show a specific unit
     * 
     * @param int $id specific unit ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleUnit($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_UNIT, $id));
    }
    
    
    /**
     * Create a unit
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addUnits($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_UNITS, $data, 'post');
    }
    
    
    /**
     * Edit unit
     * 
     * @param int $id unit ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editUnits($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_UNIT, $id), $data, 'put');
    }
    
    
    /**
     * Delete unit
     * 
     * @param int $id unit ID
     * 
     */
    public function delUnits($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_UNIT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all invoices
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllInvoices()
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_PAYMENTS);
    }
    
    
    /**
     * Get a single invoice
     * 
     * @param int $id specific invoice ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleInvoices($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_PAYMENTS, $id));
    }
    
    
    /**
     * Create a invoice
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addInvoice($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_PAYMENTS, $data, 'post');
    }
    
    
    /**
     * Edit invoice
     * 
     * @param int $id invoice ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editInvoice($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_PAYMENT, $id), $data, 'put');
    }
    
    
    /**
     * Delete invoice
     * 
     * @param int $id invoice ID
     * 
     */
    public function delInvoice($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_PAYMENT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all invoice items
     * 
     * @param int $id specific invoice ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllInvoiceItems($invocice_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_ITEMS, $invocice_id));
    }
    
    
    /**
     * Get a single invoice item
     * 
     * @param int $id specific invoice item ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleInvoiceItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_ITEM, $id));
    }
    
    
    /**
     * Create a inoice item
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addInvoiceItem($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATION_ITEMS, $data, 'post');
    }
    
    
    /**
     * Edit invoice item
     * 
     * @param int $id invoice item ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editInvoiceItem($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_ITEM, $id), $data, 'put');
    }
    
    
    /**
     * Delete invoice item
     * 
     * @param int $id invoice item ID
     * 
     */
    public function delInvoiceItem($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_ITEM, $id), NULL, 'delete');
    }
    
    
    /**
     * List all comments of an invoice
     * 
     * @param int $id specific invoice ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllInvoiceComments($invoice_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_COMMENTS, $invoice_id));
    }
    
    
    /**
     * Get a single invoice comment
     * 
     * @param int $id specific invoice comment ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleInvoiceComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_COMMENT, $id));
    }
    
    
    /**
     * Create a invoice comment
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addInvoiceComment($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_COMMENTS, $data, 'post');
    }
    
    
    /**
     * Delete invoice comment
     * 
     * @param int $id invoice comment ID
     * 
     */
    public function delInvoiceComment($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_COMMENT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all invoice payments
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllInvoicePayments()
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_PAYMENTS);
    }
    
    
    /**
     * Get a single invoice payment
     * 
     * @param int $id specific invoice payment ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleInvoicePayment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_PAYMENT, $id));
    }
    
    
    /**
     * Create a invoice payment
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addInvoicePayment($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_PAYMENTS, $data, 'post');
    }
    
    
    /**
     * Delete invoice payment
     * 
     * @param int $id invoice payment ID
     * 
     */
    public function delInvoicePayment($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_PAYMENT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all invoice tags
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllInvoiceTags()
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_TAGS);
    }
    
    
    /**
     * Get a single invoice tag
     * 
     * @param int $id specific invoice tag ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleInvoiceTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_TAG, $id));
    }
    
    
    /**
     * Create a invoice tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addInvoiceTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete invoice tag
     * 
     * @param int $id invoice tag ID
     * 
     */
    public function delInvoiceTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_TAG, $id));
    }
    
    
    /**
     * List all recurrings
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllRecurrings()
    {
	return $this->setRequestData(self::RESOURCE_RECURRINGS);
    }
    
    
    /**
     * Get a single recurring
     * 
     * @param int $id specific recurring ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleRecurring($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING, $id));
    }
    
    
    /**
     * Create a recurring
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addRecurring($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_RECURRINGS, $data, 'post');
    }
    
    
    /**
     * Edit recurring
     * 
     * @param int $id recurring ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editRecurring($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING, $id), $data, 'put');
    }
    
    
    /**
     * Delete recurring
     * 
     * @param int $id recurring ID
     * 
     */
    public function delRecurring($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING, $id), NULL, 'delete');
    }
    
    
    /**
     * List all recurring items
     * 
     * @param int $id specific recurring item ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllRecurringItems($recurring_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING_ITEMS, $recurring_id));
    }
    
    
    /**
     * Get a single recurring item
     * 
     * @param int $id specific recurring item ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleRecurringItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING_ITEM, $id));
    }
    
    
    /**
     * Create a recurring item
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addRecurringItem($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_RECURRING_ITEMS, $data, 'post');
    }
    
    
    /**
     * Edit recurring item
     * 
     * @param int $id recurring item ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editRecurringItem($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING_ITEM, $id), $data, 'put');
    }
    
    
    /**
     * Delete recurring item
     * 
     * @param int $id recurring item ID
     * 
     */
    public function delRecurringItem($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING_ITEM, $id), NULL, 'delete');
    }
    
    
    /**
     * List all recurring tags
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllRecurringTags()
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_TAGS);
    }
    
    
    /**
     * Get a single recurring tag
     * 
     * @param int $id specific recurring tag ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleRecurringTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER_TAG, $id));
    }
    
    
    /**
     * Create a recurring tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addRecurringTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete recurring tag
     * 
     * @param int $id recurring tag ID
     * 
     */
    public function delRecurringTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER_TAG, $id), NULL, 'delete');
    }
    
    
    /**
     * List all estimates
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllOffers()
    {
	return $this->setRequestData(self::RESOURCE_OFFERS);
    }
    
    
    /**
     * Get a single estimate
     * 
     * @param int $id specific offer ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleOffer($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER, $id));
    }
    
    
    /**
     * Create a estimate
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addOffer($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_OFFERS, $data, 'post');
    }
    
    
    /**
     * Edit estimate
     * 
     * @param int $id offer ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editOffer($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER, $id), $data, 'put');
    }
    
    
    /**
     * Delete estimate
     * 
     * @param int $id offer ID
     * 
     */
    public function delOffer($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER, $id), NULL, 'delete');
    }
    
    
    /**
     * List all estimate items
     * 
     * @param int $id specific offer ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllOfferItems($offer_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_ITEMS, $offer_id));
    }
    
    
    /**
     * Get a single estimate item
     * 
     * @param int $id specific offer item ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleOfferItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_ITEM, $id));
    }
    
    
    /**
     * Create a offer item
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addOfferItem($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_OFFER_ITEMS, $data, 'post');
    }
    
    
    /**
     * Edit estimate item
     * 
     * @param int $id offer item ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editOfferItem($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_ITEM, $id), $data, 'put');
    }
    
    
    /**
     * Delete estimate item
     * 
     * @param int $id offer item ID
     * 
     */
    public function delOfferItem($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_ITEM, $id), NULL, 'delete');
    }
    
    
    /**
     * List all comments of an estimate
     * 
     * @param int $id specific offer ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllOfferComments($offer_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_COMMENTS, $offer_id));
    }
    
    
    /**
     * Get a single offer comment
     * 
     * @param int $id specific offer comment ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleOfferComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_COMMENT, $id));
    }
    
    
    /**
     * Create a offer comment
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addOfferComment($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_OFFER_COMMENTS, $data, 'post');
    }
    
    
    /**
     * Delete estimate comment
     * 
     * @param int $id offer comment ID
     * 
     */
    public function delOfferComment($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_COMMENT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all estimate tags
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllOfferTags()
    {
	return $this->setRequestData(self::RESOURCE_OFFER_TAGS);
    }
    
    
    /**
     * Get a single offer tag
     * 
     * @param int $id specific offer tag ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleOfferTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_TAG, $id));
    }
    
    
    /**
     * Create a offer tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addOfferTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_OFFER_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete estimate tag
     * 
     * @param int $id offer tag ID
     * 
     */
    public function delOfferTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_TAG, $id), NULL, 'delete');
    }
    
    
    /**
     * List all credit notes
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllCreditNotes()
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTES);
    }
    
    
    /**
     * Get a single credit note
     * 
     * @param int $id specific credit note ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleCreditNote($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE, $id));
    }
    
    
    /**
     * Create a credit note
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addCreditNote($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTES, $data, 'post');
    }
    
    
    /**
     * Edit credit note
     * 
     * @param int $id credit note ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editCreditNote($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE, $id), $data, 'put');
    }
    
    
    /**
     * Delete estimate note
     * 
     * @param int $id offer note ID
     * 
     */
    public function delCreditNote($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE, $id), NULL, 'delete');
    }
    
    
    /**
     * List all credit note items
     * 
     * @param int $id specific credit note ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllCreditNoteItems($credit_note_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_ITEMS, $credit_note_id));
    }
    
    
    /**
     * Get a Credit note item
     * 
     * @param int $id specific credit note item ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleCreditNoteItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_ITEM, $id));
    }
    
    
    /**
     * Create a credit note item
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addCreditNoteItem($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTE_ITEMS, $data, 'post');
    }
    
    
    /**
     * Edit credit note item
     * 
     * @param int $id credit note item ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editCreditNoteItem($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_ITEM, $id), $data, 'put');
    }
    
    
    /**
     * Delete estimate note item
     * 
     * @param int $id offer note item ID
     * 
     */
    public function delCreditNoteItem($id) 
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_ITEM, $id), NULL, 'delete');
    }
    
    
    /**
     * List all comments of a credit note
     * 
     * @param int $credit_note_id specific credit note ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllCreditNoteComments($credit_note_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_COMMENTS, $credit_note_id));
    }
    
    
    /**
     * 
     * @param string Get a single comment
     * 
     */
    
    
    /**
     * Get a single credit note comment
     * 
     * @param int $id specific creidt note comment ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleCreditNoteComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_COMMENT, $id));
    }
    
    
    /**
     * Create a credit note comment
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addCreditNoteComment($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTE_COMMENTS, $data, 'post');
    }
    
    
    /**
     * Delete estimate note comment
     * 
     * @param int $id offer note comment ID
     * 
     */
    public function delCreditNoteComment($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_COMMENT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all payment credit notes
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllCreditNotePayemts()
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTE_PAYMENTS);
    }
    
    
    /**
     * Get a single payment of a credit note payment
     * 
     * @param int $id specific credit note payment ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleCreditNotePayemt($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_PAYMENT, $id));
    }
    
    
    /**
     * Create a credit note payment
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addCreditNotePayemt($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTE_PAYMENTS, $data, 'post');
    }
    
    
    /**
     * Delete estimate note payment
     * 
     * @param int $id offer note payment ID
     * 
     */
    public function delCreditNotePayemt($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_PAYMENT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all credit note tags
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllCreditNoteTags()
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTE_TAGS);
    }
    
    
    /**
     * Get a single credit note tag 
     * 
     * @param int $id specific credit note tag ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleCreditNoteTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_TAG, $id));
    }
    
    
    /**
     * Create a credit note tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addCreditNoteTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTE_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete estimate note tag
     * 
     * @param int $id offer note tag ID
     * 
     */
    public function delCreditNoteTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_TAG, $id), 'delete');
    }
    
    
    /**
     * List all confirmations
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllConfirmations()
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATIONS);
    }
    
    
    /**
     * Get a single confirmation
     * 
     * @param int $id specific confirmation ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleConfirmation($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION, $id));
    }
    
    
    /**
     * Create a confirmation
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addConfirmation($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATIONS, $data, 'post');
    }
    
    
    /**
     * Edit confirmation
     * 
     * @param int $id confirmation ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editConfirmation($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION, $id), $data, 'put');
    }
    
    
    /**
     * Delete confirmation
     * 
     * @param int $id confirmation ID
     * 
     */
    public function delConfirmation($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION, $id), NULL, 'delete');
    }
    
    
    /**
     * List all confirmation items
     * 
     * @param int $id specific confirmation ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllConfirmationItems($confirmation_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_COMMENTS, $confirmation_id));
    }
    
    
    /**
     * Get a single confirmation item
     * 
     * @param int $id specific confirmation item ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleConfirmationItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_COMMENT, $id));
    }
    
    
    /**
     * Create a confirmation item
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addConfirmationItem($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATION_ITEMS, $data, 'post');
    }
    
    
    /**
     * Edit confirmation item
     * 
     * @param int $id confirmation item ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editConfirmationItem($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_ITEM, $id), $data, 'put');
    }
    
    
    /**
     * Delete confirmation tag
     * 
     * @param int $id confirmation tag ID
     * 
     */
    public function delConfirmationItem($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_ITEM, $id), NULL, 'delete');
    }
    
    
    /**
     * List all confirmation items
     * 
     * @param int $id specific confirmation ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllConfirmationComments($confirmation_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_TAGS, $confirmation_id));
    }
    
    
    /**
     * 
     * @param string Get a single item of a confirmation
     * 
     */
    
    
    /**
     * Get a sindlge confirmation comment
     * 
     * @param int $id specific confirmation comment ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleConfirmationComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_TAG, $id));
    }
    
    
    /**
     * Create a confirmation comment
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addConfirmationComment($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATION_COMMENTS, $data, 'post');
    }
    
    
    /**
     * Delete confirmation comment
     * 
     * @param int $id confirmation comment ID
     * 
     */
    public function delConfirmationComment($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_COMMENT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all confiratmion tags
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllConfirmationTags()
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATION_TAGS);
    }
    
    
    /**
     * Get a single tag of a confirmation
     * 
     * @param int $id specific unit ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleConfirmationTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_TAG, $id));
    }
    
    
    /**
     * Create a confirmation tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addConfirmationTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATION_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete confirmation tag
     * 
     * @param int $id confirmation tag ID
     * 
     */
    public function delConfirmationTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_TAG, $id), NULL, 'delete');
    }
    
    
    /**
     * List all reminders
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllReminders()
    {
	return $this->setRequestData(self::RESOURCE_REMINDERS);
    }
    
    
    /**
     * Get a single reminder
     * 
     * @param int $id specific reminder ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleReminder($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER, $id));
    }
    
    
    /**
     * Create a reminder
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addReminder($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_REMINDERS, $data, 'post');
    }
    
    
    /**
     * Edit reminder
     * 
     * @param int $id reminder ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editReminder($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER, $id), $data, 'put');
    }
    
    
    /**
     * Delete reminder
     * 
     * @param int $id reminder ID
     * 
     */
    public function delReminder($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER, $id), NULL, 'delete');
    }
    
    
    /**
     * List all reminder items
     * 
     * @param int $id specific reminder ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllReminderItems($reminder_id = NULL)
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_ITEMS, $reminder_id);
    }
    
    
    /**
     * Get a single reminder item
     * 
     * @param int $id specific reminder item ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleReminderItem($id = NULL)
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_ITEM, $id);
    }
    
    
    /**
     * Create a reminder item
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addReminderItem($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_ITEMS, $data, 'post');
    }
    
    
    /**
     * Edit reminder item
     * 
     * @param int $id reminder item ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editReminderItem($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER_ITEM, $id), $data, 'put');
    }
    
    
    /**
     * Delete reminder item
     * 
     * @param int $id reminder item ID
     * 
     */
    public function delReminderItem($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER_ITEM, $id), NULL, 'delete');
    }
    
    
    /**
     * List all reminder tags
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllReminderTags()
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_TAGs);
    }
    
    
    /**
     * Get a single reminder tag
     * 
     * @param int $id specific reminder tag ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleReminderTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER_TAG, $id));
    }
    
    
    /**
     * Create a reminder tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addReminderTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete reminder tag
     * 
     * @param int $id reminder tag ID
     * 
     */
    public function delReminderTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER_TAG, $id), NULL, 'delete');
    }
    
    
    /**
     * List all delivery notes
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllDeliveryNotes()
    {
	return $this->setRequestData(self::RESOURCE_DELIVERIENOTES);
    }
    
    
    /**
     * Get a single delivery note
     * 
     * @param int $id specific delivery note ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleDesliveryNote($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_ITEM, $id));
    }
    
    
    /**
     * Create a delivery note
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addDeliveryNote($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_DELIVERIENOTES, $data, 'post');
    }
    
    
    /**
     * Edit delivery note
     * 
     * @param int $id delivery note ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editDeliveryNote($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE, $id), $data, 'put');
    }
    
    
    /**
     * Delete deliver note
     * 
     * @param int $id deliver note ID
     * 
     */
    public function delDeliveryNote($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE, $id), NULL, 'delete');
    }
    
    
    /**
     * List all delivery note items
     * 
     * @param int $id specific delivery note ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllDeliveryNoteItems($delivery_note_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_ITEMS, $delivery_note_id));
    }
    
    
    /**
     * Get a single delivery note item
     * 
     * @param int $id specific delivery note item ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleDeliveryNoteItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_ITEM, $id));
    }
    
    
    /**
     * Create a delivery note item
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addDeliveryNoteItem($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_DELIVERIENOTE_ITEMS, $data, 'post');
    }
    
    
    /**
     * Edit delivery note item
     * 
     * @param int $id delivery note item ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editDeliveryNoteItem($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_ITEM, $id), $data, 'put');
    }
    
    
    /**
     * Delete deliver note item
     * 
     * @param int $id deliver note item ID
     * 
     */
    public function delDeliveryNoteItem($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_ITEM, $id), NULL, 'delete');
    }
    
    
    /**
     * List all comments of a delivery note
     * 
     * @param int $id specific credit note ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllDeliveryNoteComments($delivery_note_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_COMMENTS, $delivery_note_id));
    }
    
    
    /**
     * Get a single comment of a delivery note
     * 
     * @param int $id specific credit note ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleDeliveryNoteComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_COMMENT, $id));
    }
    
    
    /**
     * Create a deliver note comment
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addDeliveryNoteComment($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_DELIVERIENOTE_COMMENTS, $data, 'post');
    }
    
    
    /**
     * Delete deliver note comment
     * 
     * @param int $id deliver note comment ID
     * 
     */
    public function delDeliveryNoteComment($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_COMMENT, $id), NULL, 'put');
    }
    
    
    /**
     * 
     * @param string List all delivery note tags (tagcloud)
     * 
     */
    
    
    /**
     * List all delivery note tags
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllDeliveryNoteTags()
    {
	$this->setRequestData(self::RESOURCE_DELIVERIENOTE_TAGS);
    }
    
    
    /**
     * Get a single delivery note tag id
     * 
     * @param int $id specific delivery note tag ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleDeliveryNoteTag($id = NULL)
    {
	$this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_TAG, $id));
    }
    
    
    /**
     * Create a delivery note tag
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addDeliveryNoteTag($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_DELIVERIENOTE_TAGS, $data, 'post');
    }
    
    
    /**
     * Delete deliver note tag
     * 
     * @param int $id deliver note tag ID
     * 
     */
    public function delDeliveryNoteTag($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_TAG, $id), NULL, 'delete');
    }
    
    
    /**
     * List all templates
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllTemplates()
    {
	return $this->setRequestData(self::RESOURCE_TEMPLATES);
    }
    
    
    /**
     * Show a specific template
     * 
     * @param int $id specific tamplate ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleTemplate($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_TEMPLATE, $id));
    }
    
    
    /**
     * Create a template
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addTemplate($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_TEMPLATES, $data, 'post');
    }
    
    
    /**
     * Edit template
     * 
     * @param int $id template ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editTemplate($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_TEMPLATE, $id), $data, 'put');
    }
    
    
    /**
     * Delete template
     * 
     * @param int $id template ID
     * 
     */
    public function delTemplate($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_TEMPLATE, $id), NULL, 'delete');
    }
    
    
    /**
     * 
     * View settings
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSettings()
    {
	return $this->setRequestData(self::RESOURCE_SETTINGS);
    }
    
    
    /**
     * Edit settings
     * 
     * @param mixed JSON-, XML-Object or Array
     * 
     */
    public function editSettings($data)
    {
	return $this->setRequestData(self::RESOURCE_SETTINGS, $data, 'put');
    }
    
    
    /**
     * List all setting article properties
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllSettingArticleProperties()
    {
	return $this->setRequestData(self::RESOURCE_SETTING_ARTICLEPROPERTIES);
    }
    
    
    /**
     * Get a single Setting: article properties
     * 
     * @param int $id specific article-property ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleSettingArticleProperties($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_ARTICLEPROPERTIE, $id));
    }
    
    
    /**
     * Create a article property
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addSettingArticleProperty($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_SETTING_ARTICLEPROPERTIES, $data, 'post');
    }
    
    
    /**
     * Edit article property
     * 
     * @param int $id article property ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editSettingArticleProperty($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_ARTICLEPROPERTIE, $id), $data, 'put');
    }
    
    
    /**
     * Delete article property
     * 
     * @param int $id article ID
     * 
     */
    public function delSettingArticleProperty($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_ARTICLEPROPERTIE, $id), NULL, 'delete');
    }
    
    
    /**
     * 
     * @param string List all client properties
     * 
     */
    
    
    /**
     * List all settings of article properties
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllSettingClientProperties()
    {
	$this->setRequestData(self::RESOURCE_SETTING_CLIENTPROPERTIES);
    }
    
    
    /**
     * Get a single Settings: client property
     * 
     * @param int $id specific client property ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleSettingClientPropertie($id = NULL)
    {
	$this->setRequestData(sprintf(self::RESOURCE_SETTING_CLIENTPROPERTIE, $id));
    }
    
    
    /**
     * Create a client property
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addSettingClientProperty($data = NULL)
    {
	$this->setRequestData(self::RESOURCE_SETTING_CLIENTPROPERTIES, $data, 'post');
    }
    
    
    /**
     * Edit client property
     * 
     * @param int $id client property ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editSettingClientProperty($id, $data = NULL)
    {
	$this->setRequestData(sprintf(self::RESOURCE_SETTING_CLIENTPROPERTIE, $id), $data, 'put');
    }
    
    
    /**
     * Delete client property
     * 
     * @param int $id client property ID
     * 
     */
    public function delSettingClientProperty($id)
    {
	$this->setRequestData(sprintf(self::RESOURCE_SETTING_CLIENTPROPERTIE, $id), NULL, 'delete');
    }
    
    
    /**
     * List all settings of user properties
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllSettingUserProperties()
    {
	return $this->setRequestData(self::RESOURCE_SETTING_USERRPROPERTIES);
    }
    
    
    /**
     * Get a single Settings: user property
     * 
     * @param int $id specific user property ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleSettingUserPropertie($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_USERRPROPERTIE, $id));
    }
    
    
    /**
     * Create a setting user property
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addSettingUserProperty($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_SETTING_USERRPROPERTIES, $data, 'post');
    }
    
    
    /**
     * Edit user property
     * 
     * @param int $id user property ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editSettingUserProperty($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_USERRPROPERTIE, $id), $data, 'put');
    }
    
    
    /**
     * Delete setting user property
     * 
     * @param int $id user property ID
     * 
     */
    public function delSettingUserProperty($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_USERRPROPERTIE, $id), NULL, 'delete');
    }
    
    
    /**
     * List all setting tax rates
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllSettingTaxes()
    {
	return $this->setRequestData(self::RESOURCE_SETTING_TAXES);
    }
    
    
    /**
     * Get a single Settings: tax rate
     * 
     * @param int $id specific tax ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleSettingTaxe($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_TAXE, $id));
    }
    
    
    /**
     * Create a tax
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addSettingTax($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_SETTING_TAXES, $data, 'post');
    }
    
    
    /**
     * Edit tax
     * 
     * @param int $id tax ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editSettingTax($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_TAXE, $id), $data, 'put');
    }
    
    
    /**
     * Delete setting tax
     * 
     * @param int $id tax ID
     * 
     */
    public function delSettingTax($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_TAXE, $id), NULL, 'delete');
    }
    
    
    /**
     * 
     * @param string List all tax free countries
     * 
     */
    
    
    /**
     * List all tax free countries
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllSettingCountryTaxes()
    {
	return $this->setRequestData(self::RESOURCE_SETTING_COUNTRYTAXES);
    }
    
    
    /**
     * Show a specific tax free country
     * 
     * @param int $id specific country tax ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleSettingCountryTaxe($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_COUNTRYTAXE, $id));
    }
    
    
    /**
     * Create a country tax
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addSettingCountryTax($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_SETTING_COUNTRYTAXES, $data, 'post');
    }
    
    
    /**
     * Edit country tax
     * 
     * @param int $id article ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editSettingCountryTax($id, $data = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_COUNTRYTAXE, $id), $data, 'put');
    }
    
    
    /**
     * Delete setting country tax
     * 
     * @param int $id country tax ID
     * 
     */
    public function delSettingCountryTax($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_COUNTRYTAXE, $id), NULL, 'delete');
    }
    
    
    /**
     * List all settings of reminders
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllSettingReminder() 
    {
	return $this->setRequestData(self::RESOURCE_SETTING_REMINDERTEXTS);
    }
    
    
    /**
     * Show a specific reminder
     * 
     * @param int $id specific reminder ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleSettingReminder($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_REMINDERTEXT, $id));
    }
    
    
    /**
     * Create a reminder text
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addSettingReminder($data = NULL) 
    {
	return $this->setRequestData(self::RESOURCE_SETTING_REMINDERTEXTS, $data, 'post');
    }
    
    
    /**
     * Edit reminder
     * 
     * @param int $id reminder ID
     * @param mixed $data JSON or XML you send
     * 
     */
    public function editSettingReminder($id, $data = NULL) 
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_REMINDERTEXT, $id), $data, 'put');
    }
    
    
    /**
     * Delete reminder
     * 
     * @param int $id reminder ID
     * 
     */
    public function delSettingReminder($id) 
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_REMINDERTEXT, $id), NULL, 'delete');
    }
    
    
    /**
     * List all users
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllUsers()
    {
	$this->setRequestData(self::RESOURCE_CLIENTS);
    }
    
    
    /**
     * Show a specific user
     * 
     * @param int $id specific user ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleUser($id = NULL)
    {
	$this->setRequestData(sprintf(self::RESOURCE_CLIENT, $id));
    }
    
    
    /**
     * List all properties of an user
     * 
     * @param int $id specific article user ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getAllUserPropertieValues($user_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_USER_PROPERTYVALUES, $user_id));
    }
    
    
    /**
     * Show a specific user property value
     * 
     * @param int $id specific user property value ID
     * 
     * @return mixed JSON-, XML-Object or Array
     * 
     */
    public function getSingleUserPropertieValues($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_USER_PROPERTYVALUE, $id));
    }
    
    
    /**
     * Create a user property value
     * 
     * @param string $data JSON or XML you send
     * 
     * @return mixed Response 201 Created output will be JSON-, XML-Object or Array
     */
    public function addUserPropertieValue($data = NULL)
    {
	return $this->setRequestData(self::RESOURCE_USER_PROPERTYVALUES, $data, 'post');
    }
    
    /**
     * Get the wanted Accept header
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
     * Builds the Contenttype Header
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
	
	return sprintf('Content-Type: %s', $contentType);
    }
    
    
    /**
     * Return the Content in the format JSON or XML
     * 
     * @return string
     */
    private function setRequestData($resource, $data = NULL, $request = NULL)
    {
	
	$this->bmRequestURI = $resource;
	
	$data = $this->getRequest($data, $request);
	
	header($this->buildHeader());
	
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
     * Convert Json Objects to Array
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
     * Convert Json Objects to Array
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
     * Get the request from server with curl send
     * 
     * @param mixed $data XML or JSON
     * @param string $request Resource Request URL
     * 
     * @return string
     * 
     */
    private function getRequest($data = NULL, $request = NULL)
    {
	
	
	$this->curl = curl_init();
	curl_setopt($this->curl, CURLOPT_HEADER, FALSE);
	curl_setopt($this->curl, CURLOPT_URL, $this->setRequestURL($this->bmRequestURI));
	
	switch($request)
	{
	    case NULL:
		$request = 'GET';
		break;
	    
	    case 'post':
	    case 'put':
		
		if($request == 'post')
		{
		    $request = 'POST';
		}
		elseif($request == 'put')
		{
		    $request = 'PUT';
		}
		
		curl_setopt($this->curl, CURLOPT_POSTFIELDS, $data);
		break;
	    
	    case 'delete':
		$request = 'DELETE';
		break;
	}
	
	curl_setopt($this->curl, CURLOPT_HTTPHEADER, array(sprintf("X-BillomatApiKey: %s", $this->bmApiKey), $this->buildHeader(),sprintf("Accept: application/%s", $this->getHeaderAccept())));
	curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt ($this->curl, CURLOPT_CUSTOMREQUEST, $request);
	
	$return = curl_exec($this->curl);
	curl_close($this->curl);
	
	return $return;
    }

    /**
     * Prepares the resource URI for request
     * 
     * @param string $resource is the URI the availabel API (the Resources) from http://www.billomat.com/api/grundlagen/
     * @param bool false for HTTP request or true for HTTPS
     * 
     * @return string builds the URL with resources
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
	$url = sprintf($protocol . $this->bmId . $this->bmApiHost, $resource);
	
	return $url;
    }

}

?>
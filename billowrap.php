<?php
/**
 * Wrapper for the billomat-API
 *
 * @version 1.0.5
 * @author Davor Ilic & Christopher Boelter
 * @adapted http://code.google.com/p/billomatwrapper/source/browse/trunk/billomat.php
 * @license GNU General Public License v3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @link http://www.billomat.com/api/
 * @last-update: 10-08-2012 23:30
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
     * @param boolean output JSON-Object (if true, default), otherwise it will output XML-Object (if false)
     * @param boolean convert Objectdata to (if true) Array (if false, default)
     * @param boolean Use socket (if true) or curl (if false, default)
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
     * @param string List all clients
     * 
     */
    public function getAllClients()
    {
	return $this->setRequestData(self::RESOURCE_CLIENTS);
    }
    
    
    /**
     * 
     * @param string Show a specific client
     * 
     */
    public function getSingleClient($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT, $id));
    }
    
    
    /**
     * 
     * @param string List all properties of a client
     * 
     */
    public function getAllClientPropertyValues($client_id) 
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT_PROPERTYVALUES, $client_id));
    }
    
    
    /**
     * 
     * @param string Get a single property
     * 
     */
    public function getSingleClientPropertyValue($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT_PROPERTYVALUE, $id));
    }


    
    /**
     * 
     * @param string List all tags (tagcloud)
     * 
     */
    public function getAllClientTags()
    {
	return $this->setRequestData(self::RESOURCE_CLIENT_TAGS);
    }


    
    /**
     * 
     * @param string Get a single tag
     * 
     */
    public function getSingleClientTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CLIENT_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all articles
     * 
     */
    public function getAllArticles()
    {
	return $this->setRequestData(self::RESOURCE_ARTICLES);
    }
    
    
    /**
     * 
     * @param string Show a specific article
     * 
     */
    public function getSingleArticle($id = null)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLES, $id));
    }
    
    
    /**
     * 
     * @param string List all Article properties
     * 
     */
    public function getAllArticlePropertyValues($article_id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE_PROPERTYVALUES, $article_id));
    }
    
    
    /**
     * 
     * @param string Get a single Article property
     * 
     */
    public function getSingleArticlePropertyValue($id)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE_PROPERTYVALUE, $id));
    }
    
    
    /**
     * 
     * @param string List all Article tags (tagcloud)
     * 
     */
    public function getAllArticleTags()
    {
	return $this->setRequestData(self::RESOURCE_ARTICLE_TAGS);
    }
    
    
    /**
     * 
     * @param string Get a single Article tag
     * 
     */
    public function getSingleArticleTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_ARTICLE_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all units
     * 
     */
    public function getAllUnits()
    {
	return $this->setRequestData(self::RESOURCE_UNITS);
    }
    
    
    /**
     * 
     * @param string Show a specific unit
     * 
     */
    public function getSingleUnit($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_UNIT, $id));
    }
    
    
    /**
     * 
     * @param string List all invoices
     * 
     */
    public function getAllInvoices()
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_PAYMENTS);
    }
    
    
    /**
     * 
     * @param string Get single invoices
     * 
     */
    public function getSingleInvoices($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_PAYMENTS, $id));
    }
    
    
    /**
     * 
     * @param string List all invoice items
     * 
     */
    public function getAllInvoiceItems($invocice_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_ITEMS, $invocice_id));
    }
    
    
    /**
     * 
     * @param string Get a single invoice item
     * 
     */
    public function getSingleInvoiceItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_ITEM, $id));
    }
    
    
    /**
     * 
     * @param string List all comments of an invoice
     * 
     */
    public function getAllInvoiceComments($invoice_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_COMMENTS, $invoice_id));
    }
    
    
    /**
     * 
     * @param string Get single invoice comment
     * 
     */
    public function getSingleInvoiceComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_COMMENT, $id));
    }
    
    
    /**
     * 
     * @param string List all invoice payments
     * 
     */
    public function getAllInvoicePayments()
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_PAYMENTS);
	
    }
    
    
    /**
     * 
     * @param string Get single invoice payment
     * 
     */
    public function getSingleInvoicePayment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_PAYMENT, $id));
	
    }
    
    
    /**
     * 
     * @param string List all invoice tags (tagcloud)
     * 
     */
    public function getAllInvoiceTags()
    {
	return $this->setRequestData(self::RESOURCE_INVOICE_TAGS);
    }
    
    
    /**
     * 
     * @param string Get single invoice tag
     * 
     */
    public function getSingleInvoiceTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_INVOICE_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all recurrings
     * 
     */
    public function getAllRecurrings()
    {
	return $this->setRequestData(self::RESOURCE_RECURRINGS);
    }
    
    
    /**
     * 
     * @param string Get a single recurring
     * 
     */
    public function getSingleRecurring($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING, $id));
    }
    
    
    /**
     * 
     * @param string List all recurring items
     * 
     */
    public function getAllRecurringItems($recurring_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING_ITEMS, $recurring_id));
    }
    
    
    /**
     * 
     * @param string Get a single recurring item
     * 
     */
    public function getSingleRecurringItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_RECURRING_ITEM, $id));
    }
    
    
    /**
     * 
     * @param string List all recurring tags (tagcloud)
     * 
     */
    public function getAllRecurringTags()
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_TAGS);
    }
    
    
    /**
     * 
     * @param string Get a single recurring tag
     * 
     */
    public function getSingleRecurringTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all estimates
     * 
     */
    public function getAllOffers()
    {
	return $this->setRequestData(self::RESOURCE_OFFERS);
    }
    
    
    /**
     * 
     * @param string Get a single estimate
     * 
     */
    public function getSingleOffer($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER, $id));
    }
    
    
    /**
     * 
     * @param string List all estimate items
     * 
     */
    public function getAllOfferItems($offer_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_ITEMS, $offer_id));
    }
    
    
    /**
     * 
     * @param string Get a single estimate item
     * 
     */
    public function getSingleOfferItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_ITEM, $id));
    }
    
    
    /**
     * 
     * @param string List all comments of an estimate
     * 
     */
    public function getAllOfferComments($offer_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_COMMENTS, $offer_id));
    }
    
    
    /**
     * 
     * @param string Get single  List all tags (tagcloud) comment
     * 
     */
    public function getSingleOfferComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_COMMENT, $id));
    }
    
    
    /**
     * 
     * @param string List all estimate tags (tagcloud)
     * 
     */
    public function getAllOfferTags()
    {
	return $this->setRequestData(self::RESOURCE_OFFER_TAGS);
    }
    
    
    /**
     * 
     * @param string Get single estimate tag
     * 
     */
    public function getSingleOfferTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_OFFER_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all credit notes
     * 
     */
    public function getAllCreditNotes()
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTES);
    }
    
    
    /**
     * 
     * @param string Get a single credit note
     * 
     */
    public function getSingleCreditNote($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE, $id));
    }
    
    
    /**
     * 
     * @param string List all Credit note items
     * 
     */
    public function getAllCreditNoteItems($credit_note_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_ITEMS, $credit_note_id));
    }
    
    
    /**
     * 
     * @param string Get a Credit note item
     * 
     */
    public function getSingleCreditNoteItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_ITEM, $id));
    }
    
    
    /**
     * 
     * @param string List all comments of a credit note
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
    public function getSingleCreditNoteComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_COMMENT, $id));
    }
    
    
    /**
     * 
     * @param string List all payments of a credit note
     * 
     */
    public function getAllCreditNotePayemts()
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTE_PAYMENTS);
    }
    
    
    /**
     * 
     * @param string Get a single payment of a credit note
     * 
     */
    public function getSingleCreditNotePayemt($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_PAYMENT, $id));
    }
    
    
    /**
     * 
     * @param string List all tags (tagcloud) of a credit note
     * 
     */
    public function getAllCreditNoteTags()
    {
	return $this->setRequestData(self::RESOURCE_CREDITNOTE_TAGS);
    }
    
    
    /**
     * 
     * @param string Get a single credit note tag (tagcloud)
     * 
     */
    public function getSingleCreditNoteTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CREDITNOTE_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all confirmations
     * 
     */
    public function getAllConfirmations()
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATIONS);
    }
    
    
    /**
     * 
     * @param string Get single confirmation
     * 
     */
    public function getSingleConfirmation($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION, $id));
    }
    
    
    /**
     * 
     * @param string List all confirmation items
     * 
     */
    public function getAllConfirmationItems($confirmation_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_COMMENTS, $confirmation_id));
    }
    
    
    /**
     * 
     * @param string Get a single confirmation item
     * 
     */
    public function getSingleConfirmationItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_COMMENT, $id));
    }
    
    
    /**
     * 
     * @param string List all confirmation items
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
    public function getSingleConfirmationComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all tags (tagcloud) of a confirmation
     * 
     */
    public function getAllConfirmationTags()
    {
	return $this->setRequestData(self::RESOURCE_CONFIRMATION_TAGS);
    }
    
    
    /**
     * 
     * @param string Get single tag of a confirmation
     * 
     */
    public function getSingleConfirmationTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_CONFIRMATION_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all reminders
     * 
     */
    public function getAllReminders()
    {
	return $this->setRequestData(self::RESOURCE_REMINDERS);
    }
    
    
    /**
     * 
     * @param string Get a single reminder
     * 
     */
    public function getSingleReminder($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER, $id));
    }
    
    
    /**
     * 
     * @param string List all reminder items
     * 
     */
    public function getAllReminderItems($reminder_id = NULL)
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_ITEMS, $reminder_id);
    }
    
    
    /**
     * 
     * @param string Get a single item
     * 
     */
    public function getSingleReminderItem($id = NULL)
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_ITEM, $id);
    }
    
    
    /**
     * 
     * @param string List all reminder tags (tagcloud)
     * 
     */
    public function getAllReminderTags()
    {
	return $this->setRequestData(self::RESOURCE_REMINDER_TAGs);
    }
    
    
    /**
     * 
     * @param string Get single reminder tag
     * 
     */
    public function getSingleReminderTag($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_REMINDER_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all delivery notes
     * 
     */
    public function getAllDeliveryNotes()
    {
	return $this->setRequestData(self::RESOURCE_DELIVERIENOTES);
    }
    
    
    /**
     * 
     * @param string Get a single delivery note
     * 
     */
    public function getSingleDesliveryNote($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_ITEM, $id));
    }
    
    
    /**
     * 
     * @param string List all delivery note items
     * 
     */
    public function getAllDeliveryNoteItems($delivery_note_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_ITEMS, $delivery_note_id));
    }
    
    
    /**
     * 
     * @param string Get a single item of delivery note
     * 
     */
    public function getSingleDeliveryNoteItem($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_ITEM, $id));
    }
    
    
    /**
     * 
     * @param string List all comments of a delivery note
     * 
     */
    public function getAllDeliveryNoteComments($delivery_note_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_COMMENTS, $delivery_note_id));
    }
    
    
    /**
     * 
     * @param string Get single comment of a delivery note
     * 
     */
    public function getSingleDeliveryNoteComment($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_COMMENT, $id));
    }
    
    
    /**
     * 
     * @param string List all delivery note tags (tagcloud)
     * 
     */
    public function getAllDeliveryNoteTags()
    {
	$this->setRequestData(self::RESOURCE_DELIVERIENOTE_TAGS);
    }
    
    
    /**
     * 
     * @param string Get a single reminder tag
     * 
     */
    public function getSingleDeliveryNoteTag($id = NULL)
    {
	$this->setRequestData(sprintf(self::RESOURCE_DELIVERIENOTE_TAG, $id));
    }
    
    
    /**
     * 
     * @param string List all templates
     * 
     */
    public function getAllTemplates()
    {
	return $this->setRequestData(self::RESOURCE_TEMPLATES);
    }
    
    
    /**
     * 
     * @param string Show a specific template
     * 
     */
    public function getSingleTemplate($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_TEMPLATE, $id));
    }
    
    
    /**
     * 
     * @param string View settings
     * 
     */
    public function getSettings()
    {
	return $this->setRequestData(self::RESOURCE_SETTINGS);
    }
    
    
    /**
     * 
     * @param string List all article properties
     * 
     */
    public function getAllSettingArticleProperties()
    {
	return $this->setRequestData(self::RESOURCE_SETTING_ARTICLEPROPERTIES);
    }
    
    
    /**
     * 
     * @param string Get a single article property
     * 
     */
    public function getSingleSettingArticleProperties($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_ARTICLEPROPERTIE, $id));
    }
    
    
    /**
     * 
     * @param string List all client properties
     * 
     */
    public function getAllSettingClientProperties()
    {
	$this->setRequestData(self::RESOURCE_SETTING_CLIENTPROPERTIES);
    }
    
    
    /**
     * 
     * @param string Get a single client property
     * 
     */
    public function getSingleSettingClientPropertie($id = NULL)
    {
	$this->setRequestData(sprintf(self::RESOURCE_SETTING_CLIENTPROPERTIE, $id));
    }
    
    
    /**
     * 
     * @param string List all user properties
     * 
     */
    public function getAllSettingUserProperties()
    {
	return $this->setRequestData(self::RESOURCE_SETTING_USERRPROPERTIES);
    }
    
    
    /**
     * 
     * @param string Get a single user property
     * 
     */
    public function getSingleSettingUserPropertie($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_USERRPROPERTIE, $id));
    }
    
    
    /**
     * 
     * @param string List all tax rates
     * 
     */
    public function getAllSettingTaxes()
    {
	return $this->setRequestData(self::RESOURCE_SETTING_TAXES);
    }
    
    
    /**
     * 
     * @param string Get sin­gle tax rate
     * 
     */
    public function getSingleSettingTaxe($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_TAXE, $id));
    }
    
    
    /**
     * 
     * @param string List all tax free countries
     * 
     */
    public function getAllSettingCountryTaxes()
    {
	return $this->setRequestData(self::RESOURCE_SETTING_COUNTRYTAXES);
    }
    
    
    /**
     * 
     * @param string Show a specific tax free country
     * 
     */
    public function getSingleSettingCountryTaxe($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_COUNTRYTAXE, $id));
    }
    
    
    /**
     * 
     * @param string List all reminder texts
     * 
     */
    public function getAllSettingReminderTexts() 
    {
	return $this->setRequestData(self::RESOURCE_SETTING_REMINDERTEXTS);
    }
    
    
    /**
     * 
     * @param string Show a specific reminder text
     * 
     */
    public function getSingleSettingReminderText($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_SETTING_REMINDERTEXT, $id));
    }
    
    
    /**
     * 
     * @param string List all users
     * 
     */
    public function getAllUser()
    {
	$this->setRequestData(self::RESOURCE_CLIENTS);
    }
    
    
    /**
     * 
     * @param string Show a specific user
     * 
     */
    public function getSingleUser($id = NULL)
    {
	$this->setRequestData(sprintf(self::RESOURCE_CLIENTS, $id));
    }
    
    
    /**
     * 
     * @param string List all properties of an user
     * 
     */
    public function getAllUserPropertieValues($user_id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_USER_PROPERTYVALUES, $user_id));
    }
    
    
    /**
     * 
     * @param string Get a single property
     * 
     */
    public function getSingleUserPropertieValues($id = NULL)
    {
	return $this->setRequestData(sprintf(self::RESOURCE_USER_PROPERTYVALUE, $id));
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
     * @return string
     */
    private function setRequestData($resource, $data = NULL)
    {
	
	$this->bmRequestURI = $resource;
	
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
     * Description: Prepares the requestet URI for request
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
	$url = sprintf($protocol . $this->bmId . $this->bmApiHost, $resource);
	
	return $url;
    }

}

?>
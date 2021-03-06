=== WPSSO Schema JSON-LD Markup - Schema / Structured Data / Rich Snippet Markup ===
Plugin Name: WPSSO Schema JSON-LD Markup (WPSSO JSON)
Plugin Slug: wpsso-schema-json-ld
Text Domain: wpsso-schema-json-ld
Domain Path: /languages
License: Nontransferable License for WordPress Site Address URL
License URI: http://surniaulula.com/wp-content/plugins/wpsso-schema-json-ld/license/pro.txt
Donate Link: https://wpsso.com/?utm_source=wpssojson-readme-donate
Assets URI: https://surniaulula.github.io/wpsso-schema-json-ld/assets/
Tags: wpsso, schema, schema.org, structured data, json, json-ld, ld+json, rich snippets, article, product, event, rating, review, recipe, google, seo, news, amp, co-authors, co-authors plus, pinterest, video object, video schema, search engine optimization, news, optimize, knowledge graph, aggregate rating
Contributors: jsmoriss
Requires At Least: 3.1
Tested Up To: 4.6
Stable Tag: 1.10.3-1

WPSSO extension to add complete Schema JSON-LD markup (Article, Event, Organization, Place / Business, Product, Recipe, and more).

== Description ==

<p><img src="https://surniaulula.github.io/wpsso-schema-json-ld/assets/icon-256x256.png" width="256" height="256" style="width:33%;min-width:128px;max-width:256px;float:left;margin:0 40px 20px 0;" /><strong>Offers <em>complete</em> Schema / Structured Data / Rich Snippet markup</strong> &mdash; including images, videos, organization (publisher), person (author and co-authors), product variations, product ratings, recipe details, event information, etc (see complete examples bellow).</p>

<p><strong>Overrides missing or incomplete Schema markup in your theme templates.</strong></p>

<p><strong>Select another Schema type than <a href="https://schema.org/BlogPosting">BlogPosting</a> for <a href="https://wordpress.org/plugins/amp/">AMP</a> webpages.</strong></p>

<p><strong>Include all WooCommerce product images and variations the Schema Product markup!</strong> (Pro version)</p>

<p><strong>Provides specific Schema markup and optimization features for Pinterest</strong> &mdash; Pinterest does not (currently) read the standard JSON-LD format. WPSSO and its WPSSO JSON extension include special provisions to provide Schema markup using meta tags for Pinterest, along with methods to avoid conflicts between incompatible Pinterest and Facebook Open Graph meta tags.</p>

<blockquote>
<p><strong>Prerequisite</strong> &mdash; WPSSO Schema JSON-LD Markup (WPSSO JSON) is an extension for the <a href="https://wordpress.org/plugins/wpsso/">WordPress Social Sharing Optimization (WPSSO)</a> plugin.</p>
</blockquote>

= Quick List of Features =

**WPSSO JSON Free / Basic Features**

Extends the features of either the Free or Pro versions of WPSSO.

Includes support for Automattic's [Accelerated Mobile Pages (AMP)](https://wordpress.org/plugins/amp/) plugin.

Includes contributor markup for [Co-Authors Plus](https://wordpress.org/plugins/co-authors-plus/) authors and guest authors (requires [WPSSO Pro](http://wpsso.com/) to retrieve co-author information).

Adds an additional "Schema Markup" settings page to the SSO menu:

* Website Alternate Name
* Organization Logo Image URL
* Organization Banner (600x60px) URL
* Maximum Images to Include
* Schema Image Dimensions
* Maximum Description Length
* Author / Person Name Format
* Default Item Type for Home Page
* Default Item Type by Post Type (for Posts, Pages, Media, and custom post types).

Adds Schema / Structured Data JSON-LD markup:

* Schema Type [schema.org/BlogPosting](http://schema.org/BlogPosting)
* Schema Type [schema.org/WebPage](http://schema.org/WebPage)

> * URL
> * Name (Title)
> * Description
> * DatePublished
> * DateModified
> * Author as [schema.org/Person](http://schema.org/Person)
> 	* Author URL from Profile
> 	* Author Name
> 	* Author Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Author Image URL
> 		* Author Image Width
> 		* Author Image Height
> 	* Author SameAs
>		* Facebook URL
>		* Google+ URL
>		* Instagram URL
>		* LinkedIn URL
>		* MySpace URL
>		* Pinterest URL
>		* Tumblr URL
>		* Twitter URL
>		* YouTube URL
>		* Website URL
> * Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 	* Image URL
> 	* Image Width
> 	* Image Height
> * Videos as [schema.org/VideoObject](http://schema.org/VideoObject) (**[WPSSO Pro](https://wpsso.com/extend/plugins/wpsso/) required**)
> 	* Video URL
> 	* Video Name (Title)
> 	* Video Description
> 	* Video FileFormat
> 	* Video Width
> 	* Video Height
> 	* Video Duration
> 	* Video UploadDate
> 	* Video ThumbnailUrl
> 	* Video EmbedUrl
> 	* Video Thumbnail as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Thumbnail URL
> 		* Thumbnail Width
> 		* Thumbnail Height

= Quick List of Features (Continued) =

**WPSSO JSON Pro / Power-User Features**

Extends the features of WPSSO Pro (requires a licensed WPSSO Pro plugin).

Adds additional custom options in the Social Settings metabox:

* Main Entity of Page
* Schema Item Type
* Schema Item Name
* Article Headline
* Article Publisher
* Schema Description

Adds Schema / Structured Data JSON-LD markup:

* Schema Type [schema.org/CreativeWork](http://schema.org/CreativeWork)
	* Schema Type [schema.org/Article](http://schema.org/Article)
		* Schema Type [schema.org/BlogPosting](http://schema.org/BlogPosting)
		* Schema Type [schema.org/NewsArticle](http://schema.org/NewsArticle)
		* Schema Type [schema.org/Report](http://schema.org/Report)
		* Schema Type [schema.org/ScholarlyArticle](http://schema.org/ScholarlyArticle)
		* Schema Type [schema.org/SocialMediaPosting](http://schema.org/SocialMediaPosting)
		* Schema Type [schema.org/TechArticle](http://schema.org/TechArticle)
	* Schema Type [schema.org/Book](http://schema.org/Book)
	* Schema Type [schema.org/Blog](http://schema.org/Blog)
	* Schema Type [schema.org/Recipe](http://schema.org/Recipe)
	* Schema Type [schema.org/Review](http://schema.org/Review)
	* Schema Type [schema.org/WebPage](http://schema.org/WebPage)
	* Schema Type [schema.org/WebSite](http://schema.org/WebSite)
 
> * URL
> * Name (Title)
> * Headline (for Article Sub-Types)
> * Description
> * DatePublished
> * DateModified
> * Author as [schema.org/Person](http://schema.org/Person)
> 	* Author URL from Profile
> 	* Author Name
> 	* Author Description
> 	* Author Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Author Image URL
> 		* Author Image Width
> 		* Author Image Height
> 	* Author SameAs
>		* Facebook URL
>		* Google+ URL
>		* Instagram URL
>		* LinkedIn URL
>		* MySpace URL
>		* Pinterest URL
>		* Tumblr URL
>		* Twitter URL
>		* YouTube URL
>		* Website URL
> * Publisher as [schema.org/Organization](http://schema.org/Organization)
> 	* URL
> 	* Name
> 	* Description
> 	* Logo Image as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Image URL
> 		* Image Width
> 		* Image Height
> 	* Publisher SameAs
>		* Facebook Business Page URL
>		* Google+ Business Page URL
>		* Instagram Business URL
>		* LinkedIn Company Page URL
>		* MySpace Business Page URL
>		* Pinterest Company Page URL
>		* Twitter Business Page URL
> * CreativeWork Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 	* Image URL
> 	* Image Width
> 	* Image Height
> * CreativeWork Videos as [schema.org/VideoObject](http://schema.org/VideoObject) (**[WPSSO Pro](https://wpsso.com/extend/plugins/wpsso/) required**)
> 	* Video URL
> 	* Video Name (Title)
> 	* Video Description
> 	* Video FileFormat
> 	* Video Width
> 	* Video Height
> 	* Video Duration
> 	* Video UploadDate
> 	* Video ThumbnailUrl
> 	* Video EmbedUrl
> 	* Video Thumbnail as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Thumbnail URL
> 		* Thumbnail Width
> 		* Thumbnail Height
> * CreativeWork ItemReviewed as Any Schema Type
> 	* Item URL
> * CreativeWork ReviewRating as [schema.org/Rating](http://schema.org/Rating)
> 	* RatingValue
> 	* WorstRating
> 	* BestRating

* Schema Type [schema.org/Event](http://schema.org/Event)
	* Schema Type [schema.org/BusinessEvent](http://schema.org/BusinessEvent)
	* Schema Type [schema.org/ChildrensEvent](http://schema.org/ChildrensEvent)
	* Schema Type [schema.org/DanceEvent](http://schema.org/DanceEvent)
	* Schema Type [schema.org/DeliveryEvent](http://schema.org/DeliveryEvent)
	* Schema Type [schema.org/EducationEvent](http://schema.org/EducationEvent)
	* Schema Type [schema.org/ExhibitionEvent](http://schema.org/ExhibitionEvent)
	* Schema Type [schema.org/Festival](http://schema.org/Festival)
	* Schema Type [schema.org/FoodEvent](http://schema.org/FoodEvent)
	* Schema Type [schema.org/LiteraryEvent](http://schema.org/LiteraryEvent)
	* Schema Type [schema.org/MusicEvent](http://schema.org/MusicEvent)
	* Schema Type [schema.org/PublicationEvent](http://schema.org/PublicationEvent)
	* Schema Type [schema.org/SaleEvent](http://schema.org/SaleEvent)
	* Schema Type [schema.org/ScreeningEvent](http://schema.org/ScreeningEvent)
	* Schema Type [schema.org/SocialEvent](http://schema.org/SocialEvent)
	* Schema Type [schema.org/SportsEvent](http://schema.org/SportsEvent)
	* Schema Type [schema.org/TheaterEvent](http://schema.org/TheaterEvent)
	* Schema Type [schema.org/VisualArtsEvent](http://schema.org/VisualArtsEvent)

> * URL
> * Name (Title)
> * Description
> * StartDate
> * EndDate
> * Organizer as [schema.org/Person](http://schema.org/Person) or [schema.org/Organization](http://schema.org/Organization)
> 	* URL
> 	* Name
> 	* Description
> 	* Organization Logo Image as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Image URL
> 		* Image Width
> 		* Image Height
> 	* Organization SameAs
>		* Facebook Business Page URL
>		* Google+ Business Page URL
>		* Instagram Business URL
>		* LinkedIn Company Page URL
>		* MySpace Business Page URL
>		* Pinterest Company Page URL
>		* Twitter Business Page URL
> * Event Location as [schema.org/Place](http://schema.org/Place)
> 	* Address as [schema.org/PostalAddress](http://schema.org/PostalAddress)
> 		* streetAddress
> 		* postOfficeBoxNumber
> 		* addressLocality
> 		* addressRegion
> 		* postalCode
> 		* addressCountry
> 	* Geo Location as [schema.org/GeoCoordinates](http://schema.org/GeoCoordinates)
> 		* elevation
> 		* latitude
> 		* longitude
> * Event Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 	* Image URL
> 	* Image Width
> 	* Image Height
> * Event Videos as [schema.org/VideoObject](http://schema.org/VideoObject) (**[WPSSO Pro](https://wpsso.com/extend/plugins/wpsso/) required**)
> 	* Video URL
> 	* Video Name (Title)
> 	* Video Description
> 	* Video FileFormat
> 	* Video Width
> 	* Video Height
> 	* Video Duration
> 	* Video UploadDate
> 	* Video ThumbnailUrl
> 	* Video EmbedUrl
> 	* Video Thumbnail as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Thumbnail URL
> 		* Thumbnail Width
> 		* Thumbnail Height

* Schema Type [schema.org/Organization](http://schema.org/Organization)
	* Schema Type [schema.org/Airline](http://schema.org/Airline)
	* Schema Type [schema.org/Corporation](http://schema.org/Corporation)
	* Schema Type [schema.org/EducationalOrganization](http://schema.org/EducationalOrganization)
		* Schema Type [schema.org/CollegeOrUniversity](http://schema.org/CollegeOrUniversity)
		* Schema Type [schema.org/ElementarySchool](http://schema.org/ElementarySchool)
		* Schema Type [schema.org/MiddleSchool](http://schema.org/MiddleSchool)
		* Schema Type [schema.org/Preschool](http://schema.org/Preschool)
		* Schema Type [schema.org/School](http://schema.org/School)
	* Schema Type [schema.org/GovernmentOrganization](http://schema.org/GovernmentOrganization)
	* Schema Type [schema.org/MedicalOrganization](http://schema.org/MedicalOrganization)
		* Schema Type [schema.org/Dentist](http://schema.org/Dentist)
		* Schema Type [schema.org/Hospital](http://schema.org/Hospital)
		* Schema Type [schema.org/Pharmacy](http://schema.org/Pharmacy)
		* Schema Type [schema.org/Physician](http://schema.org/Physician)
	* Schema Type [schema.org/NGO](http://schema.org/NGO)
	* Schema Type [schema.org/PerformingGroup](http://schema.org/PerformingGroup)
		* Schema Type [schema.org/DanceGroup](http://schema.org/DanceGroup)
		* Schema Type [schema.org/MusicGroup](http://schema.org/MusicGroup)
		* Schema Type [schema.org/PerformingGroup](http://schema.org/PerformingGroup)
		* Schema Type [schema.org/TheaterGroup](http://schema.org/TheaterGroup)
	* Schema Type [schema.org/SportsOrganization](http://schema.org/SportsOrganization)
		* Schema Type [schema.org/SportsTeam](http://schema.org/SportsTeam)
 
> * URL
> * Name
> * Description
> * Logo Image as [schema.org/ImageObject](http://schema.org/ImageObject)
> 	* Image URL
> 	* Image Width
> 	* Image Height
> * Organization SameAs
>	* Facebook Business Page URL
>	* Google+ Business Page URL
>	* Instagram Business URL
>	* LinkedIn Company Page URL
>	* MySpace Business Page URL
>	* Pinterest Company Page URL
>	* Twitter Business Page URL
> * Organization Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 	* Image URL
> 	* Image Width
> 	* Image Height
> * Organization Videos as [schema.org/VideoObject](http://schema.org/VideoObject) (**[WPSSO Pro](https://wpsso.com/extend/plugins/wpsso/) required**)
> 	* Video URL
> 	* Video Name (Title)
> 	* Video Description
> 	* Video FileFormat
> 	* Video Width
> 	* Video Height
> 	* Video Duration
> 	* Video UploadDate
> 	* Video ThumbnailUrl
> 	* Video EmbedUrl
> 	* Video Thumbnail as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Thumbnail URL
> 		* Thumbnail Width
> 		* Thumbnail Height

* Schema Type [schema.org/Person](http://schema.org/Person)
 
> * URL from Profile
> * Name
> * Description
> * Person Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 	* Image URL
> 	* Image Width
> 	* Image Height
> * Person SameAs
>	* Facebook URL
>	* Google+ URL
>	* Instagram URL
>	* LinkedIn URL
>	* MySpace URL
>	* Pinterest URL
>	* Tumblr URL
>	* Twitter URL
>	* YouTube URL
>	* Website URL

* Schema Type [schema.org/Place](http://schema.org/Place) (**[WPSSO PLM](https://wordpress.org/plugins/wpsso-plm/) extension required to manage Place / Location information**)
	* Schema Type [schema.org/AdministrativeArea](http://schema.org/AdministrativeArea)
	* Schema Type [schema.org/CivicStructure](http://schema.org/CivicStructure)
	* Schema Type [schema.org/Landform](http://schema.org/Landform)
	* Schema Type [schema.org/LandmarksOrHistoricalBuildings](http://schema.org/LandmarksOrHistoricalBuildings)
	* Schema Type [schema.org/LocalBusiness](http://schema.org/LocalBusiness)
		* Schema Type [schema.org/AnimalShelter](http://schema.org/AnimalShelter)
		* Schema Type [schema.org/AutomotiveBusiness](http://schema.org/AutomotiveBusiness)
		* Schema Type [schema.org/ChildCare](http://schema.org/ChildCare)
		* Schema Type [schema.org/DryCleaningOrLaundry](http://schema.org/DryCleaningOrLaundry)
		* Schema Type [schema.org/EmergencyService](http://schema.org/EmergencyService)
		* Schema Type [schema.org/EmploymentAgency](http://schema.org/EmploymentAgency)
		* Schema Type [schema.org/EntertainmentBusiness](http://schema.org/EntertainmentBusiness)
		* Schema Type [schema.org/FinancialService](http://schema.org/FinancialService)
		* Schema Type [schema.org/FoodEstablishment](http://schema.org/FoodEstablishment)
			* Schema Type [schema.org/Bakery](http://schema.org/Bakery)
			* Schema Type [schema.org/BarOrPub](http://schema.org/BarOrPub)
			* Schema Type [schema.org/Brewery](http://schema.org/Brewery)
			* Schema Type [schema.org/CafeOrCoffeeShop](http://schema.org/CafeOrCoffeeShop)
			* Schema Type [schema.org/FastFoodRestaurant](http://schema.org/FastFoodRestaurant)
			* Schema Type [schema.org/IceCreamShop](http://schema.org/IceCreamShop)
			* Schema Type [schema.org/Restaurant](http://schema.org/Restaurant)
			* Schema Type [schema.org/Winery](http://schema.org/Winery)
		* Schema Type [schema.org/GovernmentOffice](http://schema.org/GovernmentOffice)
		* Schema Type [schema.org/HealthAndBeautyBusiness](http://schema.org/HealthAndBeautyBusiness)
		* Schema Type [schema.org/HomeAndConstructionBusiness](http://schema.org/HomeAndConstructionBusiness)
		* Schema Type [schema.org/InternetCafe](http://schema.org/InternetCafe)
		* Schema Type [schema.org/LegalService](http://schema.org/LegalService)
		* Schema Type [schema.org/Library](http://schema.org/Library)
		* Schema Type [schema.org/LodgingBusiness](http://schema.org/LodgingBusiness)
		* Schema Type [schema.org/MedicalOrganization](http://schema.org/MedicalOrganization)
		* Schema Type [schema.org/ProfessionalService](http://schema.org/ProfessionalService)
		* Schema Type [schema.org/RadioStation](http://schema.org/RadioStation)
		* Schema Type [schema.org/RealEstateAgent](http://schema.org/RealEstateAgent)
		* Schema Type [schema.org/RecyclingCenter](http://schema.org/RecyclingCenter)
		* Schema Type [schema.org/SelfStorage](http://schema.org/SelfStorage)
		* Schema Type [schema.org/ShoppingCenter](http://schema.org/ShoppingCenter)
		* Schema Type [schema.org/SportsActivityLocation](http://schema.org/SportsActivityLocation)
		* Schema Type [schema.org/Store](http://schema.org/Store)
			* Schema Type [schema.org/AutoPartsStore](http://schema.org/AutoPartsStore)
			* Schema Type [schema.org/BikeStore](http://schema.org/BikeStore)
			* Schema Type [schema.org/BookStore](http://schema.org/BookStore)
			* Schema Type [schema.org/ClothingStore](http://schema.org/ClothingStore)
			* Schema Type [schema.org/ComputerStore](http://schema.org/ComputerStore)
			* Schema Type [schema.org/ConvenienceStore](http://schema.org/ConvenienceStore)
			* Schema Type [schema.org/DepartmentStore](http://schema.org/DepartmentStore)
			* Schema Type [schema.org/ElectronicsStore](http://schema.org/ElectronicsStore)
			* Schema Type [schema.org/Florist](http://schema.org/Florist)
			* Schema Type [schema.org/FurnitureStore](http://schema.org/FurnitureStore)
			* Schema Type [schema.org/GardenStore](http://schema.org/GardenStore)
			* Schema Type [schema.org/GroceryStore](http://schema.org/GroceryStore)
			* Schema Type [schema.org/HardwareStore](http://schema.org/HardwareStore)
			* Schema Type [schema.org/HobbyShop](http://schema.org/HobbyShop)
			* Schema Type [schema.org/HomeGoodsStore](http://schema.org/HomeGoodsStore)
			* Schema Type [schema.org/JewelryStore](http://schema.org/JewelryStore)
			* Schema Type [schema.org/LiquorStore](http://schema.org/LiquorStore)
			* Schema Type [schema.org/MensClothingStore](http://schema.org/MensClothingStore)
			* Schema Type [schema.org/MobilePhoneStore](http://schema.org/MobilePhoneStore)
			* Schema Type [schema.org/MovieRentalStore](http://schema.org/MovieRentalStore)
			* Schema Type [schema.org/MusicStore](http://schema.org/MusicStore)
			* Schema Type [schema.org/OfficeEquipmentStore](http://schema.org/OfficeEquipmentStore)
			* Schema Type [schema.org/OutletStore](http://schema.org/OutletStore)
			* Schema Type [schema.org/PawnShop](http://schema.org/PawnShop)
			* Schema Type [schema.org/PetStore](http://schema.org/PetStore)
			* Schema Type [schema.org/ShoeStore](http://schema.org/ShoeStore)
			* Schema Type [schema.org/SportingGoodsStore](http://schema.org/SportingGoodsStore)
			* Schema Type [schema.org/TireShop](http://schema.org/TireShop)
			* Schema Type [schema.org/ToyStore](http://schema.org/ToyStore)
			* Schema Type [schema.org/WholesaleStore](http://schema.org/WholesaleStore)
		* Schema Type [schema.org/TelevisionStation](http://schema.org/TelevisionStation)
		* Schema Type [schema.org/TouristInformationCenter](http://schema.org/TouristInformationCenter)
		* Schema Type [schema.org/TravelAgency](http://schema.org/TravelAgency)
	* Schema Type [schema.org/Residence](http://schema.org/Residence)
	* Schema Type [schema.org/TouristAttraction](http://schema.org/TouristAttraction)

> * URL
> * Name
> * Description
> * AcceptsReservations for [schema.org/FoodEstablishment](http://schema.org/FoodEstablishment)
> * Menu (URL) for [schema.org/FoodEstablishment](http://schema.org/FoodEstablishment)
> * Address as [schema.org/PostalAddress](http://schema.org/PostalAddress)
> 	* streetAddress
> 	* postOfficeBoxNumber
> 	* addressLocality
> 	* addressRegion
> 	* postalCode
> 	* addressCountry
> * Geo Location as [schema.org/GeoCoordinates](http://schema.org/GeoCoordinates)
> 	* elevation
> 	* latitude
> 	* longitude
> * Opening Hours Specification as [schema.org/openingHoursSpecification](http://schema.org/openingHoursSpecification)
> 	* opens
> 	* closes
> 	* validFrom
> 	* validThrough
> * Place Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 	* Image URL
> 	* Image Width
> 	* Image Height
> * Place Videos as [schema.org/VideoObject](http://schema.org/VideoObject)
> 	* Video URL
> 	* Video Name
> 	* Video Description
> 	* Video FileFormat
> 	* Video Width
> 	* Video Height
> 	* Video Duration
> 	* Video UploadDate
> 	* Video ThumbnailUrl
> 	* Video EmbedUrl
> 	* Video Thumbnail as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Thumbnail URL
> 		* Thumbnail Width
> 		* Thumbnail Height

* Schema Type [schema.org/Product](http://schema.org/Product) (**supported e-Commerce plugin required**)
 
> * Product URL
> * Product Name
> * Product Description
> * Product SKU
> * Product Color
> * Product Category
> * Product Width / Height as [schema.org/QuantitativeValue](http://schema.org/QuantitativeValue)
> 	* Value
> 	* UnitCode CMT
> * Product Length (AdditionalProperty) as [schema.org/PropertyValue](http://schema.org/PropertyValue)
> 	* PropertyID length
> 	* Value
> 	* UnitCode CMT
> * Product Weight as [schema.org/QuantitativeValue](http://schema.org/QuantitativeValue)
> 	* Value
> 	* UnitCode KGM
> * Product Offers as [schema.org/Offer](http://schema.org/Offer)
> 	* Variation Price
> 	* Variation PriceCurrency
> 	* Variation Availability
>	* Variation ItemOffered as [schema.org/IndividualProduct](http://schema.org/IndividualProduct)
>		* Variation URL
>		* Variation Name
> 		* Variation SKU
> 		* Variation Color
>		* Variation Description
> 		* Variation Width / Height as [schema.org/QuantitativeValue](http://schema.org/QuantitativeValue)
> 			* Value
> 			* UnitCode CMT
> 		* Variation Length (additionalProperty) as [schema.org/PropertyValue](http://schema.org/PropertyValue)
> 			* PropertyID length
> 			* Value
> 			* UnitCode CMT
> 		* Variation Weight as [schema.org/QuantitativeValue](http://schema.org/QuantitativeValue)
> 			* Value
> 			* UnitCode KGM
> 		* Variation Image as [schema.org/ImageObject](http://schema.org/ImageObject)
> 			* Image URL
> 			* Image Width
> 			* Image Height
> * Product Rating as [schema.org/AggregateRating](http://schema.org/AggregateRating)
> 	* RatingValue
> 	* RatingCount
> 	* WorstRating
> 	* BestRating
> 	* ReviewCount
> * Product Images as [schema.org/ImageObject](http://schema.org/ImageObject)
> 	* Image URL
> 	* Image Width
> 	* Image Height
> * Product Videos as [schema.org/VideoObject](http://schema.org/VideoObject)
> 	* Video URL
> 	* Video Name
> 	* Video Description
> 	* Video FileFormat
> 	* Video Width
> 	* Video Height
> 	* Video Duration
> 	* Video UploadDate
> 	* Video ThumbnailUrl
> 	* Video EmbedUrl
> 	* Video Thumbnail as [schema.org/ImageObject](http://schema.org/ImageObject)
> 		* Thumbnail URL
> 		* Thumbnail Width
> 		* Thumbnail Height

* Schema Type [schema.org/WebSite](http://schema.org/WebSite)
 
> * URL
> * Name
> * Description
> * PotentialAction as [schema.org/SearchAction](http://schema.org/SearchAction)
> 	* Target
> 	* Query-Input

= Examples =

Example WPSSO JSON Pro markup for a Tech Article published on surniaulula.com.

<pre>
&lt;script type="application/ld+json"&gt;{
    "@context": "http://schema.org",
    "@type": "TechArticle",
    "url": "http://surniaulula.com/2016/04/15/php-create-an-array-of-hours/",
    "name": "PHP &amp;ndash; Create an Array of Hours",
    "description": "Create an array of store hours easily in PHP -- this function generates an array of values quickly, with hours formatted and stepped as you wish.",
    "mainEntityOfPage": {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "@id": "http://surniaulula.com/2016/04/15/php-create-an-array-of-hours/"
    },
    "headline": "PHP &amp;ndash; Create an Array of Hours",
    "datepublished": "2016-04-15T14:30:02+00:00",
    "datemodified": "2016-04-15T15:05:58+00:00",
    "inLanguage": "en_US",
    "publisher": {
        "@context": "http://schema.org",
        "@type": "Organization",
        "url": "http://surniaulula.com",
        "name": "Surnia Ulula",
        "alternateName": "Surnia Ulula Ltd",
        "description": "UNIX and WordPress related articles, Bash, Perl and PHP scripts, along with a selection of Free and Premium WordPress plugins.",
        "logo": {
            "@context": "http://schema.org",
            "@type": "ImageObject",
            "url": "http://cdn1.static.surniaulula.com/wp-content/uploads/surnia-ulula-text-banner-wide-600x60.png",
            "width": 600,
            "height": 60
        }
    },
    "author": [
        {
            "@context": "http://schema.org",
            "@type": "Person",
            "url": "http://surniaulula.com/",
            "name": "JS Morisset",
            "description": "Sr UNIX SysAdmin with over 25 years experience in small, medium, and large-scale production / e-commerce environments. #wordpress #unix #sysadmin #php #perl"
        }
    ],
    "image": [
        {
            "@context": "http://schema.org",
            "@type": "ImageObject",
            "url": "http://cdn1.static.surniaulula.com/wp-content/uploads/2014/03/php-logo-1200x1200.png",
            "width": 1200,
            "height": 1200
        }
    ]
}&lt;/script&gt;
</pre>

Example WPSSO JSON Pro markup for a WooCommerce product, including its name, description, images, videos, sku, price, availability, ratings, colors, category, width, height, weight, all product variations, and much more.

<pre>
&lt;script type="application/ld+json"&gt;{
    "@context": "http://schema.org",
    "@type": "Product",
    "url": "http://woo.surniaulula.com/product/a-colorful-pencil/",
    "name": "A Colorful Pencil",
    "description": "This is a short description for the colorful pencil.",
    "mainEntityOfPage": {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "@id": "http://woo.surniaulula.com/product/a-colorful-pencil/"
    },
    "aggregateRating": {
        "@context": "http://schema.org",
        "@type": "AggregateRating",
        "ratingvalue": "5",
        "ratingcount": 1,
        "worstrating": 1,
        "bestrating": 5,
        "reviewcount": "3"
    },
    "sku": "PENCIL",
    "color": "Green | Blue | Orange | Red",
    "category": "Pencils",
    "width": {
        "@context": "http://schema.org",
        "@type": "QuantitativeValue",
        "value": "0.5",
        "unitCode": "CMT"
    },
    "height": {
        "@context": "http://schema.org",
        "@type": "QuantitativeValue",
        "value": "12",
        "unitCode": "CMT"
    },
    "weight": {
        "@context": "http://schema.org",
        "@type": "QuantitativeValue",
        "value": "10",
        "unitCode": "KGM"
    },
    "offers": [
        {
            "@context": "http://schema.org",
            "@type": "Offer",
            "price": "1.00",
            "priceCurrency": "USD",
            "availability": "InStock",
            "itemOffered": {
                "@context": "http://schema.org",
                "@type": "IndividualProduct",
                "url": "http://woo.surniaulula.com/product/a-colorful-pencil/?attribute_color=Green",
                "sku": "PENCIL_GREEN",
                "name": "A Colorful Pencil",
                "color": "Green",
                "description": "A description for the green pencil.",
                "width": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "0.5",
                    "unitCode": "CMT"
                },
                "height": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "12",
                    "unitCode": "CMT"
                },
                "weight": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "10",
                    "unitCode": "KGM"
                },
                "image": [
                    {
                        "@context": "http://schema.org",
                        "@type": "ImageObject",
                        "url": "http://woo.surniaulula.com/wp-content/uploads/2014/04/Bina_pencil_green-800x800.png",
                        "width": 800,
                        "height": 800
                    }
                ]
            }
        },
        {
            "@context": "http://schema.org",
            "@type": "Offer",
            "price": "1.00",
            "priceCurrency": "USD",
            "availability": "InStock",
            "itemOffered": {
                "@context": "http://schema.org",
                "@type": "IndividualProduct",
                "url": "http://woo.surniaulula.com/product/a-colorful-pencil/?attribute_color=Blue",
                "sku": "PENCIL_BLUE",
                "name": "A Colorful Pencil",
                "color": "Blue",
                "description": "A description for the blue pencil.",
                "width": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "0.5",
                    "unitCode": "CMT"
                },
                "height": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "12",
                    "unitCode": "CMT"
                },
                "weight": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "10",
                    "unitCode": "KGM"
                },
                "image": [
                    {
                        "@context": "http://schema.org",
                        "@type": "ImageObject",
                        "url": "http://woo.surniaulula.com/wp-content/uploads/2014/04/Bina_pencil_blue-800x800.png",
                        "width": 800,
                        "height": 800
                    }
                ]
            }
        },
        {
            "@context": "http://schema.org",
            "@type": "Offer",
            "price": "1.00",
            "priceCurrency": "USD",
            "availability": "InStock",
            "itemOffered": {
                "@context": "http://schema.org",
                "@type": "IndividualProduct",
                "url": "http://woo.surniaulula.com/product/a-colorful-pencil/?attribute_color=Orange",
                "sku": "PENCIL_ORANGE",
                "name": "A Colorful Pencil",
                "color": "Orange",
                "description": "A description for the orange pencil.",
                "width": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "0.5",
                    "unitCode": "CMT"
                },
                "height": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "12",
                    "unitCode": "CMT"
                },
                "weight": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "10",
                    "unitCode": "KGM"
                },
                "image": [
                    {
                        "@context": "http://schema.org",
                        "@type": "ImageObject",
                        "url": "http://woo.surniaulula.com/wp-content/uploads/2014/04/Bina_pencil_orange-800x800.png",
                        "width": 800,
                        "height": 800
                    }
                ]
            }
        },
        {
            "@context": "http://schema.org",
            "@type": "Offer",
            "price": "1.10",
            "priceCurrency": "USD",
            "availability": "InStock",
            "itemOffered": {
                "@context": "http://schema.org",
                "@type": "IndividualProduct",
                "url": "http://woo.surniaulula.com/product/a-colorful-pencil/?attribute_color=Red",
                "sku": "PENCIL_RED",
                "name": "A Colorful Pencil",
                "color": "Red",
                "description": "A description for the red pencil.",
                "width": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "0.5",
                    "unitCode": "CMT"
                },
                "height": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "12",
                    "unitCode": "CMT"
                },
                "weight": {
                    "@context": "http://schema.org",
                    "@type": "QuantitativeValue",
                    "value": "10",
                    "unitCode": "KGM"
                },
                "image": [
                    {
                        "@context": "http://schema.org",
                        "@type": "ImageObject",
                        "url": "http://woo.surniaulula.com/wp-content/uploads/2014/04/Bina_pencil_red-800x800.png",
                        "width": 800,
                        "height": 800
                    }
                ]
            }
        }
    ],
    "image": [
        {
            "@context": "http://schema.org",
            "@type": "ImageObject",
            "url": "http://woo.surniaulula.com/wp-content/uploads/2014/04/Bina_pencil_green-800x800.png",
            "width": 800,
            "height": 800
        }
    ]
}&lt;/script&gt;
</pre>

Example WPSSO JSON Pro markup for a Restaurant using the [WPSSO PLM](https://wordpress.org/plugins/wpsso-plm/) extension to manage the Place / Location information (address, geo coordinates, business hours (daily and seasonal), restaurant menu URL, and accepts reservation values).

<pre>
&lt;script type="application/ld+json"&gt;{
    "@context": "http://schema.org",
    "@type": "Restaurant",
        "url": "http://restaurant.example.com/",
        "name": "Restaurant Name",
    "description": "A great family owned restaurant. ;-)",
    "mainEntityOfPage": {
        "@context": "http://schema.org",
        "@type": "WebPage",
        "@id": "http://restaurant.example.com/"
    },
    "image": [
        {
            "@context": "http://schema.org",
            "@type": "ImageObject",
            "url": "http://restaurant.example.com/wp-content/uploads/restaurant-image.jpg",
            "width": 800,
            "height": 663
        }
    ],
    "video": [
        {
            "@context": "http://schema.org",
            "@type": "VideoObject",
            "url": "https://www.youtube.com/v/xxxxxxxxxxx?version=3&amp;#038;autohide=1",
            "name": "Restaurant Walkthrough",
            "description": "See our beautiful dining room.",
            "fileFormat": "application/x-shockwave-flash",
            "width": "1280",
            "height": "720",
            "uploadDate": "2013-10-03T00:00:00+00:00",
            "thumbnailUrl": "https://i.ytimg.com/vi/xxxxxxxxxxx/maxresdefault.jpg",
            "embedUrl": "https://www.youtube.com/embed/xxxxxxxxxxx",
            "thumbnail": {
                "@context": "http://schema.org",
                "@type": "ImageObject",
                "url": "https://i.ytimg.com/vi/xxxxxxxxxxx/maxresdefault.jpg",
                "width": 1280,
                "height": 720
            }
        },
        {
            "@context": "http://schema.org",
            "@type": "VideoObject",
            "url": "https://www.youtube.com/embed/xxxxxxxxxxx",
            "name": "Restaurant Walkthrough",
            "description": "See our beautiful dining room.",
            "fileFormat": "text/html",
            "width": "1280",
            "height": "720",
            "uploadDate": "2013-10-03T00:00:00+00:00",
            "thumbnailUrl": "https://i.ytimg.com/vi/xxxxxxxxxxx/maxresdefault.jpg",
            "embedUrl": "https://www.youtube.com/embed/xxxxxxxxxxx"
        }
    ]
    "address": {
        "@context": "http://schema.org",
        "@type": "PostalAddress",
        "streetAddress": "123 A Road",
        "postOfficeBoxNumber": 7,
        "addressLocality": "Cityname",
        "addressRegion": "Somestate",
        "postalCode": "123456",
        "addressCountry": "US"
    },
    "geo": {
        "@context": "http://schema.org",
        "@type": "GeoCoordinates",
        "latitude": 10,
        "longitude": -10
    },
    "openingHoursSpecification": [
        {
            "@context": "http://schema.org",
            "@type": "openingHoursSpecification",
            "dayOfWeek": "Saturday",
            "opens": "12:00",
            "closes": "22:00",
            "validFrom": "2016-05-01",
            "validThrough": "2016-09-01"
        }
    ],
    "menu": "http://restaurant.example.com/restaurant-menu.html",
    "acceptsReservations": "true"
}&lt;/script&gt;
</pre>

= Available in Multiple Languages =

* English (US)
* French (France)
* More to come...

= Extends the WPSSO Plugin =

The WordPress Social Sharing Optimization (WPSSO) plugin is required to use the WPSSO JSON extension.

Use the Free version of WPSSO JSON with *both* the Free and Pro versions of WPSSO. The [WPSSO JSON Pro](http://wpsso.com/extend/plugins/wpsso-schema-json-ld/?utm_source=wpssojson-readme-extends) extension (along with all WPSSO Pro extensions) requires the [WPSSO Pro](http://wpsso.com/extend/plugins/wpsso/?utm_source=wpssojson-readme-extends) plugin as well.

[Purchase the WPSSO Schema JSON-LD Markup (WPSSO JSON) Pro extension](http://wpsso.com/extend/plugins/wpsso-schema-json-ld/?utm_source=wpssojson-readme-purchase) (includes a *No Risk 30 Day Refund Policy*).

== Installation ==

= Install and Uninstall =

* [Install the Plugin](http://wpsso.com/codex/plugins/wpsso-schema-json-ld/installation/install-the-plugin/)
* [Uninstall the Plugin](http://wpsso.com/codex/plugins/wpsso-schema-json-ld/installation/uninstall-the-plugin/)

== Frequently Asked Questions ==

= Frequently Asked Questions =

* None

== Other Notes ==

= Additional Documentation =

* [Developer Resources](http://wpsso.com/codex/plugins/wpsso-schema-json-ld/notes/developer/)
	* [Filters](http://wpsso.com/codex/plugins/wpsso-schema-json-ld/notes/developer/filters/)
		* [Filter Examples](http://wpsso.com/codex/plugins/wpsso-schema-json-ld/notes/developer/filters/examples/)
			* [Assign a Custom Field Value to a Schema Property](http://wpsso.com/codex/plugins/wpsso-schema-json-ld/notes/developer/filters/examples/assign-a-custom-field-value-to-a-schema-property/)
			* [Modify the aggregateRating Property](http://wpsso.com/codex/plugins/wpsso-schema-json-ld/notes/developer/filters/examples/modify-the-aggregaterating-property/)
			* [Modify the VideoObject Name and Description](http://wpsso.com/codex/plugins/wpsso-schema-json-ld/notes/developer/filters/examples/modify-the-videoobject-name-and-description/)

== Screenshots ==

01. (Pro version) Social Settings metabox on Posts, Pages, Taxonomy / Terms, and User editing pages &mdash; Allows you to modify the default Schema type, title, headline (for Articles), description, image, video, preview an example share, preview the meta tags, and validate the webpage markup with online tools.
02. (Pro version) A selection of Google Structured Data / Schema Markup options are shown based on the Schema Item Type. This example shows the Schema Item Type http://schema.org/Review, along with its reviewed item type (product, restaurant, book, etc.), the item URL, and the item rating.
03. (Pro version) An example of WPSSO JSON's Schema Recipe markup on Pinterest.
04. (Pro version) Google's Structured Data Testing Tool showing results for an example of the Schema Item Type http://schema.org/TechArticle.

== Changelog ==

= Free / Basic Version Repository =

* [GitHub](https://surniaulula.github.io/wpsso-schema-json-ld/)
* [WordPress.org](https://wordpress.org/plugins/wpsso-schema-json-ld/developers/)

= Changelog / Release Notes =

**Version 1.10.3-1 (2016/09/10)**

Official announcement: N/A

* *New Features*
	* None
* *Improvements*
	* None
* *Bugfixes*
	* None
* *Developer Notes*
	* Updated the SucomNotice method calls for WPSSO v3.35.0-1.

**Version 1.10.2-1 (2016/08/30)**

Official announcement: N/A

* *New Features*
	* None
* *Improvements*
	* None
* *Bugfixes*
	* Removed an extra argument in a `filter_json_data_http_schema_org_recipe()` method call (Pro version).
* *Developer Notes*
	* None

**Version 1.10.1-1 (2016/08/18)**

Official announcement: N/A

* *New Features*
	* None
* *Improvements*
	* Added support for an "areaServed" property (as a "circle" GeoShape) in the Schema http://schema.org/LocalBusiness markup (Pro version).
* *Bugfixes*
	* None
* *Developer Notes*
	* Removed the '$use_post' argument in the json data filters.

**Version 1.10.0-1 (2016/07/29)**

Official announcement: http://wpsso.com/2016/07/29/wpsso-json-update-google-pinterest-recipe-markup/

* *New Features*
	* Added new recipe input fields to the Social Settings metabox, shown when the Schema Recipe type is selected (Pro version).
		* "Recipe Preperation Time"
		* "Recipe Cook Time"
		* "Recipe Total Time"
		* "Recipe Total Calories"
		* "Recipe Quantity"
		* "Recipe Ingredients"
	* Added a new "Recipe Ingredients Custom Field" option in the Schema Markup settings page.
	* Added new properties for the schema.org/Recipe type:
		* 'prepTime'
		* 'cookTime'
		* 'totalTime'
		* 'nutrition'
		* 'recipeYield'
		* 'ingredients'
* *Improvements*
	* None
* *Bugfixes*
	* None
* *Developer Notes*
	* Added a new filter to include 3rd party aggregate ratings:
		* apply_filters( 'wpsso_json_prop_http_schema_org_aggregaterating', $rating, $mod );

== Upgrade Notice ==

= 1.10.3-1 =

(2016/09/10) Updated the SucomNotice method calls for WPSSO v3.35.0-1.


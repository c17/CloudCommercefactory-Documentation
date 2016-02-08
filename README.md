### Changelog of 08/02/2016

#### features:

- [FRONT] major design improvments on default theme
- [FRONT] home page blocks are now manageable through ABO (you need to run the SQL scripts included in DeliveryPackage/75.HomeBlocks)

#### fix:
- [MODULES][MPF.PAYMENT.PAYPAL] minor fix of the module

### Changelog of 10/11/2015

#### features:

- [FRONT] frontoffice translation (merchant backoffice not fully done)
- [FRONT] categories pictures are now available in all the pages (in ViewBag.LayoutParameters.AllCategoriesList)
- [FRONT] in cart tunnel, delivery address id is passed to the view if user has already selected one
- [BACK] large refinement of merchant payment management, you will need to run the SQL scripts included in DeliveryPackage/06.SQL: 03.OrderMerchant/01.AddColumnOrdersMerchantCommissionsDueDate.sql, 73.MerchantPayment/*.sql and 74.OrdersMechantCommissions/*.sql
- [BACK] add link to cron syntax and cron creation tool in jobs planification page
- [BACK] add main checkbox to select all checkboxes in tables
- [FRONT / BACK] add LESS edition feature, which allows you to edit the css sheets of your site
- [CORE][IMAGE MANAGER] categories banner size is now parametrable
- [MODULES] are now better cleaned while recompiling the solution
- [MODULES] can now use resources files (should preferably be placed in a "Resources" folder, but resources file will be found either way)
- [MODULES][MPF.FACEBOOK] ability to choose if facebook connect should create or not an account by passing a boolean as 4th parameter of facebookConnect.testLogin (default is false)
- [MODULES][MPF.PAYMENT.PAYPAL] update module to match new version of modules

#### fix:

- [FRONT] fix MPf.Web.Front.Models.BackOfficeMerchant.Mapper access modifier (from private to public)
- [FRONT] add mapping for file extensions .woff, .woff2 and .svg in Web_.config
- [FRONT][CART] properly fill ProductId properties of crosslinked products in Index
- [FRONT][MAIL] in order waiting mail, add merchant name for each product in order, not only the first
- [FRONT][PRODUCT] properly handle handle product's options quantities
- [FRONT][CATEGORIES] fix categories operator price sliders + better ceiling / flooring of prices
- [FRONT][MERCHANT BACKOFFICE] fix offer creation via merchant back office
- [FRONT / MODULES][FACEBOOK] better handling of asynchronous facebook sdk loading
- [BACK] simplify password forgotten action / html in merchant management page
- [BACK] add mapping for file extensions .woff in Web_.config
- [BACK] in job management, batch type list is filled will all available batchs in the project
- [BACK] fix integration + resources strings of validate merchant button in merchant details page
- [BACK] in offer management, add merchant id filter (hidden because only filled when coming from "see offers" link in merchant details page)
- [BACK] modify posible options of rows number in results tables
- [BACK] changing a merchant's email now properly update the merchant AND aspnet_Membership table, also remove now useless code in PasswordForgotten method of FormAuthenticationService
- [BACK] fix a bug in details order management page where the value of an EAV attribute of type Integer was not displayed
- [BACK] remove console.log debug in js files
- [BACK] fix a bug in WYSIWYG editor where links were not displayed
- [BACK] in static page edition, textarea now properly displays html
- [BACK] in job parameters edition, look for job by Type and not by Name (which can be changed)
- [BACK] properly display offer SKU instead of twice the quotation ID
- [SERVICE] fix antlr dependencies folder path
- [CORE] wishlist business now correctly pass criteria to DAO
- [CORE] add option name and value in mail sent when an order is made
- [CORE][URL REWRITTING] simplify and clean code
- [MODULES] changing all modules type from WebApplication to ClassLibrary, removing useless folders / files in consequence
- [MODULES][MPF.IMPORTBATCHS] in ImportTheFrenchTalent, stock for option and products' pictures are now properly retrieved. Results are now paginated, also removed useless parameters.
- [MODULES][MPF.EXCEPTIONS.AIRBRAKE] add configuration check before trying to use AirBrake
- [MODULES][MPF.FACEBOOK] remove useless reference to EntityFramework
- [MODULES][MPF.PAYMENT.SYSTEMPAY] : fix filename case issues with git
- [MODULES][MPF.PAYMENT.BE2BILL] : move specific Be2bill model from MPf.Web/Front/Modules to MPf.Payment.Be2bill
- [PROPERTIES] remove AirBrake part from template.properties files
- [PROPERTIES] set nhibernate profile to false in template.properties files
- [COMPILATION] nant build now removes read-only attribute on all DeliveryBuild files
- [ALL] fix a bug related to 2 different versions of Antlr3.Runtime dll being referenced by the project. Add xcopy post build event to keep both as they're dependencies of others dlls (Nhibernate and WebGrease)
- [ALL] general removing of useless files and their references in csproj files
- [ALL] general formatting of files (removing trailing whitespaces, useless newline...)
- [ALL] general warnings removal

### Changelog of 09/06/2015

- Fix a bug linked to Facebook module, the assembly was not compiled as a module

### Changelog of 08/06/2015

- Modules loading, allowing users to create their own modules more easily. This is a big change, please refers to Functionnal and Technical documentation for more information.

### Changelog of 13/05/2015

- Adding a feature allowing the modification of jobs parameters and scheduling via ABO
- Fix a bug occuring on front website where concurrent database access could lead to a lock on table parameters, leading itself to a sql timeout


### Changelog of 06/05/2015

- Renaming default theme from Motoshop to _default: you need to update your properties files accordingly, (ie. change the value of the key “web.front.theme” to _default) an rerun the CreateConfigFileLocal script to update your *.config files.
- Major reorganization of solution file: now only one sln file regrouping all the projects, divided into subfolders. This does not impact the code itself. To compile, simply build the desired project (MPf.Web.Administration, MPf.Web.Api, MPf.Web.Front or MPf.Services.Job.Windows)
- Fix a bug occuring with parametrization and caching where duplicate parameters were created.
- Better upload of merchants and customers pictures on their backoffices.
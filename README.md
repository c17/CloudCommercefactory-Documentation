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
# Cortex Tenants Change Log

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](CONTRIBUTING.md).


## [v6.0.15] - 2021-05-25
- Replace deprecated `Breadcrumbs::register` with `Breadcrumbs::for`
- Update composer dependencies diglactic/laravel-breadcrumbs to v7

## [v6.0.14] - 2021-05-24
- Fix datatables export issues
- Drop common blade views in favor for accessarea specific views

## [v6.0.13] - 2021-05-11
- Fix constructor initialization order (fill attributes should come next after merging fillables & rules)

## [v6.0.12] - 2021-05-07
- Upgrade to GitHub-native Dependabot
- Rename migrations to always run after rinvex core packages

## [v6.0.11] - 2021-05-04
- Update spatie/laravel-schemaless-attributes package
- Use app() method alias `has` instead of `bound` for better readability

## [v6.0.10] - 2021-03-02
- Autoload artisan commands

## [v6.0.9] - 2021-02-28
- Use overridden `FormRequest` instead of native class
- Utilize IoC service container instead of hardcoded models for menu permissions
- Use `request->input()` instead of `request->get()`

## [v6.0.8] - 2021-02-11
- Replace form timestamps with common blade view

## [v6.0.7] - 2021-02-07
- Replace silber/bouncer package with custom modified tmp version

## [v6.0.6] - 2021-02-06
- Add support for runtime configurable model to allow model override (fix abilities/permission issues)
- Skip publishing module resources unless explicitly specified, for simplicity

## [v6.0.5] - 2021-01-15
- Add model replication feature
- Remove duplicate `setTable` method call override as it's already called in parent class

## [v6.0.4] - 2021-01-02
- Move cortex:autoload & cortex:activate commands to cortex/foundation module responsibility

## [v6.0.3] - 2021-01-01
- Move cortex:autoload & cortex:activate commands to cortex/foundation module responsibility
  - This is because :autoload & :activate commands are registered only if the module already autoloaded, so there is no way we can execute commands of unloaded modules
  - cortex/foundation module is always autoloaded, so it's the logical and reasonable place to register these :autoload & :activate module commands and control other modules from outside

## [v6.0.2] - 2020-12-31
- Rename seeders directory
- Enable StyleCI risky mode
- Add module activate, deactivate, autoload, unload artisan commands

## [v6.0.1] - 2020-12-25
- Add support for PHP v8

## [v6.0.0] - 2020-12-22
- Upgrade to Laravel v8

## [v5.1.4] - 2020-12-11
- Move custom eloquent model events to module layer from core package layer
- Rename broadcast channels file to avoid accessarea naming
- Rename routes, channels, menus, breadcrumbs, datatable & form IDs to follow same modular naming conventions
- Tweak datatables realtime
- Move Eloquent Events to core package responsibility
- Type hint Authorizable user parameter
- Enforce consistent datatables request object usage

## [v5.1.3] - 2020-09-26
- Fix managerarea update-tenant ability

## [v5.1.2] - 2020-09-19
- Update currency field to dropdown menu
- Enforce controller API consistency

## [v5.1.1] - 2020-08-25
- Enforce controller API consistency
- Merge pull request #107 from mohamed-hendawy/develop
- apply authorization on tenant actions in managerarea
- Activate module after installation

## [v5.1.0] - 2020-07-16
- Utilize timezones
- Use app('request.user') instead of $currentUser

## [v5.0.2] - 2020-06-21
- Automatically redirect www. subdomain to homepage without error message.
- Only query the tenant if we have a subdomain

## [v5.0.1] - 2020-06-20
- Add macroable support for Tenant model

## [v5.0.0] - 2020-06-19
- Update composer dependencies
- Refactor route parameters to container service binding
- Exclude www subdomain from not found thrown exception
- Move active tenant activation to module bootstrapping (in service provider boot stage)
- Move unbinding route parameters to UnbindRouteParameters middleware
- Add missing FormRequest import
- Refactor active tenant to container service binding, instead of runtime config value
- Introducing module early bootstrapping feature
- Stick to composer version constraints recommendations and ease minimum required version of modules

## [v4.2.0] - 2020-06-15
- Autoload config, views, language, menus, breadcrumbs, and migrations
  - This is now done automatically through cortex/foundation, so no need to manually wire it here anymore
- Merge additional fillable, casts, and rules instead of overriding
- Only display tenant edit menu if manager has permission to update
- Move tenant edit link to header menu
- Drop PHP 7.2 & 7.3 support from travis

## [v4.1.1] - 2020-05-30
- Update composer dependencies

## [v4.1.0] - 2020-05-30
- With the significance of recent updates, new minor release required

## [v4.0.8] - 2020-05-30
- Add datatables checkbox column for bulk actions
- Use getRouteKey() attribute for all redirect identifiers
- Drop useless datatable query() method override
- Drop using strip_tags on redirect identifiers as they will use ->getRouteKey() which is already safe
- Add support for datatable listing get and post requests
- Refactor model CRUD dispatched events
- Remove useless "DT_RowId" fielld from transformers
- Register channel broadcasting routes
- Fire custom model events from CRUD actions
- Rename datatables container names
- Load module routes automatically
- Strip tags breadcrumbs of potential user inputs
- Strip tags of language phrase parameters with potential user inputs
- Escape language phrases
- Update model validation rules
- Add strip_tags validation rule to string fields
- Remove default indent size config
- Fix compatibility with recent rinvex/laravel-menus package update

## [v4.0.7] - 2020-04-12
- Fix ServiceProvider registerCommands method compatibility

## [v4.0.6] - 2020-04-09
- Tweak artisan command registration
- Add missing config publishing command
- Refactor publish command and allow multiple resource values

## [v4.0.5] - 2020-04-04
- Enforce consistent artisan command tag namespacing
- Enforce consistent package namespace
- Drop laravel/helpers usage as it's no longer used
- Upgrade silber/bouncer composer package

## [v4.0.4] - 2020-03-20
- Add shortcut -f (force) for artisan publish commands
- Fix migrations path condition
- Convert database int fields into bigInteger
- Upgrade spatie/laravel-medialibrary to v8.x
- Fix couple issues and enforce consistency

## [v4.0.3] - 2020-03-16
- Update proengsoft/laravel-jsvalidation composer package

## [v4.0.2] - 2020-03-15
- Fix incompatible package version league/fractal

## [v4.0.1] - 2020-03-15
- Fix wrong package version laravelcollective/html

## [v4.0.0] - 2020-03-15
- Upgrade to Laravel v7.1.x & PHP v7.4.x

## [v3.1.2] - 2020-03-13
- Tweak TravisCI config
- Add migrations autoload option to the package
- Tweak service provider `publishesResources` & `autoloadMigrations`
- Update StyleCI config
- Drop using global helpers
- Check if ability exists before seeding

## [v3.1.1] - 2019-12-18
- Add DT_RowId field to datatables
- Fix route regex pattern to include underscores
  - This way it's compatible with validation rule `alpha_dash`
- Fix `migrate:reset` args as it doesn't accept --step

## [v3.1.0] - 2019-11-23
- Allow manager to edit his tenant details

## [v3.0.4] - 2019-10-14
- Update menus & breadcrumbs event listener to accessarea.ready
- Fix wrong dependencies letter case

## [v3.0.3] - 2019-10-06
- Refactor menus and breadcrumb bindings to utilize event dispatcher

## [v3.0.2] - 2019-09-24
- Add missing laravel/helpers composer package

## [v3.0.1] - 2019-09-23
- Fix outdated package version

## [v3.0.0] - 2019-09-23
- Upgrade to Laravel v6 and update dependencies

## [v2.2.5] - 2019-09-03
- Skip Javascrip validation for file input fields to avoid size validation conflict with jquery.validator

## [v2.2.4] - 2019-09-03
- Fix middleware injection issue with console

## [v2.2.3] - 2019-09-03
- Update media config options
- Use $_SERVER instead of $_ENV for PHPUnit

## [v2.2.2] - 2019-08-03
- Tweak menus & breadcrumbs performance

## [v2.2.1] - 2019-08-03
- Update composer dependencies

## [v2.2.0] - 2019-08-03
- Upgrade composer dependencies

## [v2.1.3] - 2019-06-03
- Enforce latest composer package versions

## [v2.1.2] - 2019-06-03
- Update publish commands to support both packages and modules natively

## [v2.1.1] - 2019-06-02
- Fix yajra/laravel-datatables-fractal and league/fractal compatibility

## [v2.1.0] - 2019-06-02
- Update composer deps
- Drop PHP 7.1 travis test
- Refactor migrations and artisan commands, and tweak service provider publishes functionality

## [v2.0.0] - 2019-03-03
- Require PHP 7.2 & Laravel 5.8
- Utilize includeWhen blade directive
- Refactor abilities seeding
- Add files option to the form to allow file upload
- Drop ownership feature of tenants

## [v1.0.2] - 2019-01-03
- Rename environment variable QUEUE_DRIVER to QUEUE_CONNECTION
- Fix wrong media destroy route
- Add missing language phrase
- Simplify and flatten create & edit form controller actions
- Tweak and simplify FormRequest validations
- Enable tinymce on all description and text area fields

## [v1.0.1] - 2018-12-22
- Update composer dependencies
- Add PHP 7.3 support to travis
- Utilize @json() blade directive

## [v1.0.0] - 2018-10-01
- Support Laravel v5.7, bump versions and enforce consistency

## [v0.0.2] - 2018-09-22
- Too much changes to list here!!

## v0.0.1 - 2017-09-09
- Tag first release

[v6.0.15]: https://github.com/rinvex/cortex-tenants/compare/v6.0.14...v6.0.15
[v6.0.14]: https://github.com/rinvex/cortex-tenants/compare/v6.0.13...v6.0.14
[v6.0.13]: https://github.com/rinvex/cortex-tenants/compare/v6.0.12...v6.0.13
[v6.0.12]: https://github.com/rinvex/cortex-tenants/compare/v6.0.11...v6.0.12
[v6.0.11]: https://github.com/rinvex/cortex-tenants/compare/v6.0.10...v6.0.11
[v6.0.10]: https://github.com/rinvex/cortex-tenants/compare/v6.0.9...v6.0.10
[v6.0.9]: https://github.com/rinvex/cortex-tenants/compare/v6.0.8...v6.0.9
[v6.0.8]: https://github.com/rinvex/cortex-tenants/compare/v6.0.7...v6.0.8
[v6.0.7]: https://github.com/rinvex/cortex-tenants/compare/v6.0.6...v6.0.7
[v6.0.6]: https://github.com/rinvex/cortex-tenants/compare/v6.0.5...v6.0.6
[v6.0.5]: https://github.com/rinvex/cortex-tenants/compare/v6.0.4...v6.0.5
[v6.0.4]: https://github.com/rinvex/cortex-tenants/compare/v6.0.3...v6.0.4
[v6.0.3]: https://github.com/rinvex/cortex-tenants/compare/v6.0.2...v6.0.3
[v6.0.2]: https://github.com/rinvex/cortex-tenants/compare/v6.0.1...v6.0.2
[v6.0.1]: https://github.com/rinvex/cortex-tenants/compare/v6.0.0...v6.0.1
[v6.0.0]: https://github.com/rinvex/cortex-tenants/compare/v5.1.4...v6.0.0
[v5.1.4]: https://github.com/rinvex/cortex-tenants/compare/v5.1.3...v5.1.4
[v5.1.3]: https://github.com/rinvex/cortex-tenants/compare/v5.1.2...v5.1.3
[v5.1.2]: https://github.com/rinvex/cortex-tenants/compare/v5.1.1...v5.1.2
[v5.1.1]: https://github.com/rinvex/cortex-tenants/compare/v5.1.0...v5.1.1
[v5.1.0]: https://github.com/rinvex/cortex-tenants/compare/v5.0.2...v5.1.0
[v5.0.2]: https://github.com/rinvex/cortex-tenants/compare/v5.0.1...v5.0.2
[v5.0.1]: https://github.com/rinvex/cortex-tenants/compare/v5.0.0...v5.0.1
[v5.0.0]: https://github.com/rinvex/cortex-tenants/compare/v4.2.0...v5.0.0
[v4.2.0]: https://github.com/rinvex/cortex-tenants/compare/v4.1.1...v4.2.0
[v4.1.1]: https://github.com/rinvex/cortex-tenants/compare/v4.1.0...v4.1.1
[v4.1.0]: https://github.com/rinvex/cortex-tenants/compare/v4.0.8...v4.1.0
[v4.0.8]: https://github.com/rinvex/cortex-tenants/compare/v4.0.7...v4.0.8
[v4.0.7]: https://github.com/rinvex/cortex-tenants/compare/v4.0.6...v4.0.7
[v4.0.6]: https://github.com/rinvex/cortex-tenants/compare/v4.0.5...v4.0.6
[v4.0.5]: https://github.com/rinvex/cortex-tenants/compare/v4.0.4...v4.0.5
[v4.0.4]: https://github.com/rinvex/cortex-tenants/compare/v4.0.3...v4.0.4
[v4.0.3]: https://github.com/rinvex/cortex-tenants/compare/v4.0.2...v4.0.3
[v4.0.2]: https://github.com/rinvex/cortex-tenants/compare/v4.0.1...v4.0.2
[v4.0.1]: https://github.com/rinvex/cortex-tenants/compare/v4.0.0...v4.0.1
[v4.0.0]: https://github.com/rinvex/cortex-tenants/compare/v3.1.2...v4.0.0
[v3.1.2]: https://github.com/rinvex/cortex-tenants/compare/v3.1.1...v3.1.2
[v3.1.1]: https://github.com/rinvex/cortex-tenants/compare/v3.1.0...v3.1.1
[v3.1.0]: https://github.com/rinvex/cortex-tenants/compare/v3.0.4...v3.1.0
[v3.0.4]: https://github.com/rinvex/cortex-tenants/compare/v3.0.3...v3.0.4
[v3.0.3]: https://github.com/rinvex/cortex-tenants/compare/v3.0.2...v3.0.3
[v3.0.2]: https://github.com/rinvex/cortex-tenants/compare/v3.0.1...v3.0.2
[v3.0.1]: https://github.com/rinvex/cortex-tenants/compare/v3.0.0...v3.0.1
[v3.0.0]: https://github.com/rinvex/cortex-tenants/compare/v2.2.5...v3.0.0
[v2.2.5]: https://github.com/rinvex/cortex-tenants/compare/v2.2.4...v2.2.5
[v2.2.4]: https://github.com/rinvex/cortex-tenants/compare/v2.2.3...v2.2.4
[v2.2.3]: https://github.com/rinvex/cortex-tenants/compare/v2.2.2...v2.2.3
[v2.2.2]: https://github.com/rinvex/cortex-tenants/compare/v2.2.1...v2.2.2
[v2.2.1]: https://github.com/rinvex/cortex-tenants/compare/v2.2.0...v2.2.1
[v2.2.0]: https://github.com/rinvex/cortex-tenants/compare/v2.1.2...v2.2.0
[v2.1.2]: https://github.com/rinvex/cortex-tenants/compare/v2.1.1...v2.1.2
[v2.1.1]: https://github.com/rinvex/cortex-tenants/compare/v2.1.0...v2.1.1
[v2.1.0]: https://github.com/rinvex/cortex-tenants/compare/v2.0.0...v2.1.0
[v2.0.0]: https://github.com/rinvex/cortex-tenants/compare/v1.0.2...v2.0.0
[v1.0.2]: https://github.com/rinvex/cortex-tenants/compare/v1.0.1...v1.0.2
[v1.0.1]: https://github.com/rinvex/cortex-tenants/compare/v1.0.0...v1.0.1
[v1.0.0]: https://github.com/rinvex/cortex-tenants/compare/v0.0.2...v1.0.0
[v0.0.2]: https://github.com/rinvex/cortex-tenants/compare/v0.0.1...v0.0.2

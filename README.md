Erstellt mit
<p align="left"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Stellenausschreibungs App

Model design:

In the created Datamodel we have the models User, Company and Job. The user in this case is an author of a list-item rather than an employee of a company with a job. That is why a user can have many jobs and companies. Important is that only the author of an item can edit or delete it, with the exception of the admin, who can remove inappropriate or deserted items for the purpose of database maintenance.
A job needs to have both a user as a responsible author and a company and only one, because a job without a company or with two companies is logically impossible. Furthrmore a company needs a user as an author. From this model we can conclude, that the user needs to be created or determined first, then the company, then the job.

View design:

Controller design:

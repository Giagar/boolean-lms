# Create an e-learning website
## Database
1.  - create a db_elearning db
    - connect the db to laravel in *env*
    - check if the connection is ok via *tinker*
2. create 3 tables using migrations
    - table courses
        - 1->\* relation with Chapters: the fk will lay in chapters, I only need to set the model
        - \*->\* relation between courses and categories: pivot table category_course
    - table chapters
    - table categories
        - \*->\* relation between courses and categories: pivot table category_course
    
    > how to:
        1) create the model + migration: `php artisan make:model ModelName --migration`;
        2) in the migration compose the table (if needed, remember the fk and its definition);
        3) launch the migration: `php artisan migrate`;

    > relations:
        - in a 1->* relation:
            - migration: the fk and its definition goes in the "many table"
            - model: 
                - the "one table" has a fn hasMany
                - the "many table" has a fn belongsTo
        - in a \*->\* relation:
            - pivot table: it has not a model, it is created via a migration: `php artisan make:migration create_1modelname_2modelname_table`
            - migration: only the pivot table contains the fk and their definition
            - model: both the table's model (not the pivot one) contains a fn belongsToMany
        

<?php

/**
 * \file spNewUser.sql
 * Adds a user to the database.
 * IN email varchar(255),\n
 * IN name varchar(255),\n
 * IN password varchar(255)\n
 * Returns: None
 */

/**
 * \file spNewUserClassComment.sql
 * Creates a new comment under the display name of a user.
 * IN email varchar(255),\n
 * IN classCRN varchar(255),\n
 * IN shortDescription varchar(2550),\n
 * IN rating varchar(255),\n
 * IN reviewDate date,\n
 * IN instructor varchar(255),\n
 * IN semester varchar(255),\n
 * IN campus varchar(255)\n
 * Returns: None
 */

/**
 * \file spNewUserNotification.sql
 * Subscribes the user to a specified notification.
 * To remove this notification, use spDeleteUserNotification.sql\n
 * IN email varchar(255),\n
 * IN notificationType varchar(255)\n
 * Returns: None
 */

/**
 * \file spNewUserRegisteredClass.sql
 * Subscribes the user to a particular class.
 * IN email varchar(255),\n
 * IN classCRN varchar(255)\n
 * Returns: None
 */

/**
 * \file spNewUserSellBook.sql
 * Allows a user to post a book they might want to sell.
 * This procedure returns the auto-generated id number. This will be need when using spNewUserSellBookPhoto.sql.\n
 * IN email varchar(255),\n
 * IN bookISBN varchar(255),\n
 * IN shortDescription varchar(255),\n
 * IN longDescription varchar(2550),\n
 * IN bookCondition varchar(255),\n
 * IN price double,\n
 * IN postDate datetime\n
 * Returns: id
 */

/**
 * \file spNewUserSellBookPhoto.sql
 * Use this in a loop when uploading multiple photos for for a particular book posting.
 * The id input is the id of the book posting. You will need to run spNewUserSellBook.sql before using this stored procedure. The actual photo will need to be uploaded to the server.\n
 * IN id integer,\n
 * IN photoName varchar(255)\n
 * Returns: None
 */

/**
 * \file spDeleteUser.sql
 * Deletes a user from a database.
 * This also deletes all UserNotifications, UserRegisteredClasses, posted books (along with the list of photos), and comments that are related to the user.
 * The actual photo will need to be removed from the server.\n
 * IN email varchar(255)\n
 * Returns: None
 */

 /**
 * \file spDeleteUserClassComment.sql
 * Deletes a comment given the users email and class crn.
 * IN email varchar(255),\n
 * IN classCRN varchar(255)\n
 * Returns: None
 */

 /**
 * \file spDeleteUserNotification.sql
 * Remove a notification from a user
 * IN email varchar(255),
 * IN notificationType varchar(255)
 * Returns: None
 */

 /**
 * \file spDeleteUser.sql
 * Deletes a user from a database.
 * This also deletes all UserNotifications, UserRegisteredClasses, posted books (along with the list of photos), and comments that are related to the user.
 * The actual photo will need to be removed from the server.\n
 * IN email varchar(255)\n
 * Returns: None
 */

 /**
 * \file spDeleteUser.sql
 * Deletes a user from a database.
 * This also deletes all UserNotifications, UserRegisteredClasses, posted books (along with the list of photos), and comments that are related to the user.
 * The actual photo will need to be removed from the server.\n
 * IN email varchar(255)\n
 * Returns: None
 */

 /**
 * \file spDeleteUser.sql
 * Deletes a user from a database.
 * This also deletes all UserNotifications, UserRegisteredClasses, posted books (along with the list of photos), and comments that are related to the user.
 * The actual photo will need to be removed from the server.\n
 * IN email varchar(255)\n
 * Returns: None
 */
?>
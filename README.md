## Lab Activity 9 Answers

### F1. Which column did you make nullable, and why?

I made the `remarks` column nullable because a character can be added even when there is no extra information to write. I did not make the main fields nullable because every character should have a name, element, weapon, rarity, and playable status.

### F2. Which step failed first for you, and what did the error say?

The first planned failure happened when I tried to create a Character before adding `$fillable`. Laravel gave a mass-assignment error because the model did not yet allow the values to be filled. I fixed it by adding the character columns to `$fillable`.

### F3. Why did the pages still work even though you changed no Blade file?

The Blade files still use the same variable names and character fields. I changed the controller so it supplies those variables from Eloquent instead of the JSON file. Because the data shape stayed the same, the views did not need to change.
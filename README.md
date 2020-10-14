# Refactor

For code to refactor the code formatting is excellent,
also the idea minimizing the controller codes is there
but it the its the repository that suffers with alot of code

also the BookingController and BookingRepository is trying to
do too much it should only have single responsibility, which makes it terrible.
I also noticed that there are a lot of if else statements that can be removed or
reduced i have refactored a code in getPotentialTranslators function in BookingRepository.

for BookingController i separated functions that is related to job into JobController
the devs might have put it in BookingController because the function are being use
on the same page, but that should not limit where you put functions.

So same way with the Controller i will also do the same in the repository
i will put the job related functions from BookingRepository into JobRepository

for functions like sendPushNotificationToSpecificUsers and sendNotificationTranslator in BookingRepository
i will put it in an Event and Listener instead and refactor it from there, i have made
and Event and Listener folder its not fully refactored but the idea is there

for functions isNeedToDelayPush and isNeedToSendPush in BookingRepository i will put it in
helper instead so it will be globally accessible for all notifications events or classes

So from here after decoupling the functions and refactoring few lines of code,
after removing notifications related functions and job related which would be moved
to its own repository or events, the BookingRepository 2k+ lines of codes are now just over 1.1k
it can still when its fully refactored.

the BaseRepository is perfect that is how i would do it as well.
# Adapter Pattern

The adapter pattern is a software design pattern (also known as wrapper, an alternative naming shared with the decorator pattern) that allows the interface of an existing class to be used as another interface. It is often used to make existing classes work with others without modifying their source code.

For eg the PSR-3: Logger Interface is impletented by many logging libraries. But if you want to use a logging library that does not implement PSR-3 you can use an adapter to make it work with PSR-3.
Or if you want to have a LoggerManager that supports different logging libraries you can use an adapter to make them work with the LoggerManager.

To run the example run ```composer udpate``` on builder dir.
then run ```php index.php```

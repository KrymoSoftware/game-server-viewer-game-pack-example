# game-server-viewer-game-pack-example
An exemplary Game Pack plugin for the [Game Server Viewer by Krymo Software](https://krymo.software/store/product/31-game-server-viewer/) for WoltLab Suite™.

## About

This project is a minimalistic example that demonstrates how to create a Game Pack plugin for the Game Server Viewer.
You can use this project as a starting point for your own Game Pack plugin.

If you have never created a plugin for WoltLab Suite™ before, you should take a look at the [official tutorial](https://docs.woltlab.com/6.1/tutorial/series/overview/).

## Examples in this project

There are two exemplary games added in this project:

1. A custom game called "My Custom Game" with a custom PHP class in which you can implement your own query logic.
2. A game called "My Source Game" that uses the GameQ Game Pack by Krymo Software as a base.

### My Custom Game

If you want to add a game that uses a query protocol that is not supported by the GameQ library, you need to implement the query logic yourself.
This requires a custom PHP class, such as [the one provided in this project](files/lib/system/gameserverviewer/game/MyCustomGameServer.class.php).

### My Source Game

If you want to add a game that uses a query protocol that is supported by the GameQ library, such as Source, you do not need to implement the query logic yourself.
Instead, you can use the GameQ Game Pack by Krymo Software that implements the bridge between the GameQ library and the Game Server Viewer and add your game on top with a minimalistic plugin, as demonstrated in this project.

Please note that the GameQ version provided by Krymo Software is [a fork / modified version of the original GameQ library](https://github.com/KrymoSoftware/GameQ).

## Getting started

Simply clone/download this repository and adjust the files to your needs.
You will find comments in the code that explain what you need to change.

When you are done with your adjustments, you need to create a tar archive that is installable in WoltLab Suite™.
Create a tar archive of the `files` directory and name it `files.tar`. The directory structure inside the archive should look like this:

```plaintext
files/
  lib/
    system/
      gameserverviewer/
        game/
          MyCustomGameServer.class.php
```

Then, create a tar archive of the contents of the working directory (excluding the `files` directory). The directory structure inside the archive should look like this:

```plaintext
files.tar
languages/
  de.xml
  en.xml
objectType.xml
package.xml
```

Finally, you can upload the tar archive and install the plugin in your WoltLab Suite™ installation.
The games you added will be available in the Game Server Viewer if you did everything correctly.

## Updating your plugin

When a new minor version of WoltLab Suite™ and/or the Game Server Viewer is released,
you need to update the version constraints in the `package.xml` file and test your plugin with the new version.
